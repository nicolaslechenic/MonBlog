<?php 
namespace Projet\Models;

/*
                                | ------------------------------CONNEXIONCONTROLLER-------------------------------- | 
                                |                                                                                   |
                                |                          1/ Fonction verifConnexion                               |
                                |                                                                                   |                                                             
                                |-----------------------------------------------------------------------------------|
*/

class ConnexionManager 
{

    function register(){
        $db = DbConnexion::openConnexion();
        var_dump("ert");
        extract($_POST);
        $validation = true;
        $errors = [];
        if(empty($pseudo) || empty($email) || empty($emailconf) || empty($password) || empty($passwordconf)){
            $validation = false;
            $errors[] = 'Tous les Champs sont OBLIGATOIRES !!!';
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $validation = false;
            $errors[] = 'L\'Adresse Mail n\'est pas Valide !!!';
        }
        if($emailconf != $email){
            $validation = false;
            $errors[] = 'L\'Adresse Mail de Confirmation ne correspond pas !!!';
        }
        if($passwordconf != $password){
            $validation = false;
            $errors[] = 'Le Password de Confirmation ne correspond pas !!!';
        }
        if(pseudo_check($pseudo)){
            $validation = false;
            $errors[] = 'Ce Pseudo est déjà pris';
        }
        if($validation){
            $register = $db->prepare('INSERT INTO users(pseudo, mail, password) VALUES (:pseudo, :email, :password)');
            $register->execute([
                'pseudo'=>htmlentities($pseudo),
                'email'=>htmlentities($email),
                'password'=>password_hash($password, PASSWORD_DEFAULT)
            ]);
            unset($_POST['pseudo']);
            unset($_POST['email']);
            unset($_POST['emailconf']);
        }
        return $errors;
    }
    
    function pseudo_check($pseudo){
        global $bdd;
        $result = $bdd->prepare('SELECT COUNT(*) FROM users WHERE pseudo = ?');
        $result->execute([$pseudo]);
        $result = $result->fetch()[0];
        return $result;
    }
    
    function login(){
        global $bdd;
        extract($_POST);
        $errors = 'Cela ne correspond pas à un compte valide';
        $login = $bdd->prepare('SELECT id, password FROM users WHERE pseudo = ?');
        $login->execute([$pseudo]);
        $login = $login->fetch();
        if(password_verify($password, $login['password'])){
            $_SESSION['user'] = $login['id'];
            header("Location: compte.php");
        }
        else{
            return $errors;
        }
    }
    
    function logout(){
        unset($_SESSION['user']);
        session_destroy();
        header("Location: connexion.php");
    }
}




