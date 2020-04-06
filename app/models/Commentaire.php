<?php


class Commentaire
{
    private $id;
    private $userPseudo;
    private $creationDate;
    private $updateDate;
    private $content;
    private $refPage;

    //  fonction qui s'exécute automatiquement et qui permet d'exploiter les variables
    public function __construct($userPseudo, $content, $refPage)
    {

        $this->setUserPseudo($userPseudo);
        $this->setContent($content);
        $this->setRefPage($refPage);

        $now = date_create();

        $this->setCreationDate($now->format('Y-m-d'));
        $this->setUpdateDate($now->format('Y-m-d'));
    }

    // Setters et getters
    // Getter est une méthode chargée de renvoyer la valeur d'un attribut
    // Setter est une méthode chargée d'assigner une valeur à un attribut en vérifiant son intégrité
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getUserPseudo()
    {
        return $this->userPseudo;
    }

    public function setUserPseudo($userPseudo)
    {
        $this->userPseudo = $userPseudo;
        return $this;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function getRefPage()
    {
        return $this->refPage;
    }

    public function setRefPage($refPage)
    {
        $this->refPage = $refPage;
        return $this;
    }
}