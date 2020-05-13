<?php
namespace Projet\Models;
/*
                                | ---------------------------------CLASS CONNEXION--------------------------------- | 
                                |                                                                                   |
                                |                          1/ Privatisation des propriétés                          |
                                |                          2/ Fonction __construct                                  |
                                |                          3/ Getters et Setters                                    |
                                |                                                                                   |
                                |-----------------------------------------------------------------------------------|
*/

class Connexion {



//                              |------------------------ 1/ Privatisation des propriétés --------------------------|


// private = visibilité des éléments/propriétés réduit à la classe elle-même

    private $id;
    private $pseudo;
    private $email;
    private $password;
    




//                              |----------------------------- 2/ Fonction __construct -----------------------------|
    

/* 
 Fonction qui s'exécute automatiquement à la création de l'objet et qui permet d'exploiter les variables 
 public = visiblité totale des éléments
*/ 

public function __construct($pseudo, $email, $password)

    {
        $this->setPseudo($pseudo);
        $this->setEmail($email);
        $this->setPassword($password);        
    
    }



//                              |------------------------------ 3/ Getters et Setters ------------------------------|


/* 
 Getter est une méthode chargée de renvoyer la valeur d'un attribut
 Setter est une méthode chargée d'assigner une valeur à un attribut en vérifiant son intégrité
*/


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

    // getter/setter nom
    public function getPseudo()
    {
        return $this->pseudo;
    }
    
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
        return $this;
    }

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
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }




}

?>