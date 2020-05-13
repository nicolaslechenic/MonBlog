<?php
namespace Projet\Models;
/*
                                | -----------------------------------CLASS FORM------------------------------------ | 
                                |                                                                                   |
                                |                          1/ Privatisation des propriétés                          |
                                |                          2/ Fonction __construct                                  |
                                |                          3/ Getters et Setters                                    |
                                |                                                                                   |
                                |-----------------------------------------------------------------------------------|
*/

class Form {



//                              |------------------------ 1/ Privatisation des propriétés --------------------------|



// private = visibilité des éléments/propriétés réduit à la classe elle-même

    private $id;    
    private $email;
    private $message;
    private $nom;




//                              |----------------------------- 2/ Fonction __construct -----------------------------|
    

/* 
 Fonction qui s'exécute automatiquement à la création de l'objet et qui permet d'exploiter les variables 
 public = visiblité totale des éléments
*/ 
public function __construct($email, $message, $nom)

    {
        $this->setEmail($email);
        $this->setMessage($message);
        $this->setNom($nom);        
    
    }



//                              |------------------------------ 3/ Getters et Setters ------------------------------|


/* 
 Getter est une méthode chargée de renvoyer la valeur d'un attribut
 Setter est une méthode chargée d'assigner une valeur à un attribut en vérifiant son intégrité
*/

    // getter/setter email
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    // getter/setter message
    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    // getter/setter nom
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    // getter/setter id
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}

?>