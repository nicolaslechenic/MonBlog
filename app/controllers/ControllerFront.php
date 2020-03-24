<?php

namespace Projet\controllers;

class ControllerFront{
    function home() {
        // $homeFront = new \Projet\Models\FrontManager();
        // $accueil = $homeFront->viewFront();

        require "app/views/home.php";
}

function contactFront() {
    require "app/views/contact.php";
}
function austraFront() {
    require "app/views/australie.php";
}
function nZFront() {
    require "app/views/n-Zelande.php";
}
function trucsFront() {
    require "app/views/trucs.php";
}



}



