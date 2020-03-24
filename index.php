<?php

// important pour la sécurité de vos fichiers : les sessions
// Démarre une session
session_start();

// autoloard.php généré avec Composer
require_once __DIR__. "/vendor/autoload.php";


// en cas d'erreurs
try {
    $controllerFront = new \Projet\controllers\ControllerFront();
// isset = diferent de nul
    if(isset($_GET["action"])){
        if($_GET["action"] == "contact"){
            $controllerFront->contactFront();
        }elseif($_GET["action"] == "australie"){
            $controllerFront->austraFront();
        }elseif($_GET["action"] == "nouvelleZelande"){
            $controllerFront->nZFront();
        }elseif($_GET["action"] == "trucs"){
            $controllerFront->trucsFront();
        }


    }else{
        $controllerFront->home();
    }
} catch (Exception $e) {
     require "app/views/404.php";
} 