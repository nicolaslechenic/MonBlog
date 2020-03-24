<?php

namespace Projet\Models;

class Manager{

    protected function dbConnect(){
        try{
            $bdd = new \PDO("mysql:host=localhost;dbname=monblog;charset=utf8", "root", "MotDePasse");
            return $bdd;
        }
    catch (Exception $e) {
        die("Erreur : " . $e->getMessage());
    }
}
}