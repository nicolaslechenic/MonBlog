<?php

function openConnexion(){
    //  connexion à la bdd
    try {
        $cheminConnexion = 'mysql:host=localhost;dbname=monblog';
        $login = 'root';
        $pwd = '';
        // Commande à exécuter lors de la connexion au serveur MySQL. Sera automatiquement ré-exécuté lors d'une reconnexion. 
        $arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

        $pdo = new PDO($cheminConnexion, $login, $pwd, $arrExtraParam);
        // constantes pour gérer les erreurs
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        // getFile = Récupère le nom du fichier dans lequel l'exception a été créée
        // getLine = Récupère le numéro de la ligne où l'exception a été créée
        // getMessage = Retourne le message de l'exception
        $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
        die($msg);
    }
    return $pdo;
}

function closeConnexion(){
    return null;
}