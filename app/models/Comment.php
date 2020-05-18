<?php
namespace Projet\Models;
/*
                                | -----------------------------------CLASS COMMENT--------------------------------- |                                                                                                                                                                                     
                                |                                                                                   |
                                |                          1/ Privatisation des propriétés                          |
                                |                          2/ Fonction __construct                                  |
                                |                          3/ Getters et Setters                                    |
                                |                                                                                   |
                                |-----------------------------------------------------------------------------------|
*/



class Comment{
    


//                              |------------------------ 1/ Privatisation des propriétés --------------------------|



// private = visibilité des éléments/propriétés réduit à la classe elle-même

    private $id;
    private $userPseudo;
    private $creationDate;
    private $updateDate;
    private $content;
    private $articleId;



//                              |----------------------------- 2/ Fonction __construct -----------------------------|



/* 
 Fonction qui s'exécute automatiquement à la création de l'objet et qui permet d'exploiter les variables 
 public = visiblité totale des éléments
*/ 

    public function __construct($userPseudo, $content)
    {

        $this->setUserPseudo($userPseudo);
        $this->setContent($content);
        

        $now = date_create();

        $this->setCreationDate($now->format('Y-m-d'));
        $this->setUpdateDate($now->format('Y-m-d'));
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

    // getter/setter pseudo
    public function getUserPseudo()
    {
        return $this->userPseudo;
    }

    public function setUserPseudo($userPseudo)
    {
        $this->userPseudo = $userPseudo;
        return $this;
    }

    // getter/setter date
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    // getter/setter mise à jour date
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
        return $this;
    }

    // getter/setter contenu
    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    // getter/setter article_id
    public function getArticleId()
    {
        return $this->articleId;
    }

    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;
        return $this;
    }
}