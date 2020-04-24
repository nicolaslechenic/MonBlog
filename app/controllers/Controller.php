<?php
namespace Projet\Controllers;
/*
                                | ------------------------------------CONTROLLER----------------------------------- | 
                                |                                                                                   |
                                |                             1/ Fonction accueil                                   |
                                |                             2/ Fonction austra                                    |
                                |                             3/ Fonction nZ                                        |   
                                |                             4/ Fonction trucs                                     | 
                                |                             4/ Fonction contact                                   | 
                                |                             4/ Fonction article                                   |
                                |                                                                                   |                                                              
                                |-----------------------------------------------------------------------------------|
*/


class Controller{



//                              |------------------------------- 1/ Fonction accueil -------------------------------|



    function accueil() {     
        require "app/views/frontEnd/pages/accueil.php";
    }



//                              |-------------------------------- 2/ Fonction austra --------------------------------|



    function austra() {
        $articleManager = new \Projet\Models\ArticleManager();
        $articlesList = $articleManager->readArticles($_REQUEST['action']);
        
        $commentaireManager = new \Projet\Models\CommentaireManager();
        $commentairesList = $commentaireManager->readCommentaires($_REQUEST['action']);
        
        require "app/views/frontEnd/pages/australie.php";
        return $articlesList;
        return $commentairesList;
    }



//                              |--------------------------------- 3/ Fonction nZ -----------------------------------|



    function nZ() {
        $articleManager = new \Projet\Models\ArticleManager();
        $articlesList = $articleManager->readArticles($_REQUEST['action']);

        $commentaireManager = new \Projet\Models\CommentaireManager();
        $commentairesList = $commentaireManager->readCommentaires($_REQUEST['action']);

        require "app/views/frontEnd/pages/n-Zelande.php";
        return $articlesList;
        return $commentairesList;
    }



//                              |--------------------------------- 4/ Fonction trucs --------------------------------|



    function trucs() {
        $articleManager = new \Projet\Models\ArticleManager();
        $articlesList = $articleManager->readArticles($_REQUEST['action']);

        $commentaireManager = new \Projet\Models\CommentaireManager();
        $commentairesList = $commentaireManager->readCommentaires($_REQUEST['action']);

        require "app/views/frontEnd/pages/trucs.php";
        return $articlesList;
        return $commentairesList;
    }
    
    

//                              |-------------------------------- 5/ Fonction contact --------------------------------|



    function contact() {
        require "app/views/frontEnd/pages/contact.php";
    
    }



//                              |--------------------------------- 6/ Fonction Article -------------------------------|



    function article() {
        $articleManager = new \Projet\Models\ArticleManager();
        $articlesList = $articleManager->readOneArticle();

        $commentaireManager = new \Projet\Models\CommentaireManager();
        $commentairesList = $commentaireManager->readCommentaires($_REQUEST['action']);

        require "app/views/frontEnd/pages/article.php";
        return $articlesList;
        return $commentairesList;
    }

}



