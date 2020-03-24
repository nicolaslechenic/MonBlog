<?php

namespace Projet\Models;

class FrontManager extends Manager{

    public function viewFront(){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("");
        $req->execute(array());
        
        return $req;
    }
}