<?php
namespace Projet\Models;
/*
                                | ------------------------------------ADMINMANAGER--------------------------------- | 
                                |                                                                                   |
                                |                             1/ Fonction createArticle                             |
                                |                             2/ Fonction readArticles                              |
                                |                             3/ Fonction readOneArticle                            |
                                |                             4/ Fonction readAllArticles                           |
                                |                             5/ Fonction updateArticle                             |
                                |                             6/ Fonction deleteArticle                             |                                
                                |                                                                                   |
                                |-----------------------------------------------------------------------------------|
*/


class AdminManager extends DbConnexion
{

    

//                              |--------------------------- 1/ Fonction createArticle -----------------------------|



// Fonction créer un article via la class Article
    static function createCompte(Connexion $connexion): void
    {
        // Pour créer un article
        // On se connecte à la base de donnée
        $db = DbConnexion::openConnexion();
        // On insére dans la table 'article' le titre, l'image, la date de création, la date de mise à jour, le contenu, la ref-page 
        $request = "INSERT INTO admin (pseudo, email, password) VALUES ";
        $request .= '( "' . $connexion->getPseudo() . '", "' . $connexion->getEmail() . '","' . password_hash($connexion->getPassword(), PASSWORD_DEFAULT) . '");';
        
        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();
          
        $db = DbConnexion::closeConnexion();
        
    
        
    }

    
    public function login($pseudo, $passwd){
        $db = DbConnexion::openConnexion();
        if(!empty($pseudo) && !empty($passwd)){
            $login = $db->prepare('SELECT id, pseudo, password FROM admin WHERE pseudo =?');
            $login->execute([$pseudo]);
            $login = $login->fetch();
              if(password_verify($passwd, $login['password'])){
                header("location: admin.php?action=editer");
              }else{
                return " Le pseudo et le mot de passe sont érronés";                           
              }
        }else{
           return "Tous les champs sont obligatoires";
        }
        
    }
    
    function logout(){
        unset($_SESSION['user']);
        session_destroy();
        header("Location: connexion.php");
    }


    static function loginAdmin(){
        $db = DbConnexion::openConnexion();
        extract($_POST);
        $errors = 'Cela ne correspond pas à un compte valide';
        $login = $db->prepare('SELECT id, password FROM admin WHERE pseudo = ?');
        $login->execute($_POST['pseudo']);
        $login = $login->fetch();
        if(password_verify($password, $login['password'])){
            $_SESSION['user'] = $login['id'];
            header("Location: compte.php");
        }
        else{
            return $errors;
        }
    }
}

