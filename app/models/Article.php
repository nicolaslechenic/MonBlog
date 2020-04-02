<?php

class Article{

    private $id;
    private $title;
    private $content;
    private $image;
    private $creationDate;
    private $updateDate;
    private $refPage;

    //  fonction qui s'exécute automatiquement et qui permet d'exploiter les variables
    public function __construct($title, $content, $image, $refPage)
    {

        $this->setTitle($title);
        $this->setContent($content);
        $this->setContent($image);
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

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
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