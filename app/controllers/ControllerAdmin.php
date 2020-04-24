<?php
namespace Projet\Controllers;

/*
                                | --------------------------------CONTROLLERADMIN---------------------------------- | 
                                |                                                                                   |
                                |                             1/ Fonction editer                                    |
                                |                             2/ Fonction modifier                                  |
                                |                             3/ Fonction ancien                                    |   
                                |                             4/ Fonction supprimer                                 | 
                                |                                                                                   |                                                             
                                |-----------------------------------------------------------------------------------|
*/



class ControllerAdmin{



//                              |------------------------------------ 1/ Fonction createArticle -----------------------------------|



    function editer() {  
        $articleManager = new \Projet\controllers\ArticleController();
        $article = $articleManager->createArticle($article);

        require "app/views/backOffice/editer.php";
        return $article;
    }



//                              |------------------------------------ 1/ Fonction createArticle -----------------------------------|



    function modifier() {
   
        require "app/views/backOffice/modifier.php";  
    }



    //                              |------------------------------------ 1/ Fonction createArticle -----------------------------------|



    function ancien() {
        $articleManager = new \Projet\Models\ArticleManager();
        $articlesAllList = $articleManager->readAllArticles();

        require "app/views/backOffice/poster.php";  
        return $articlesAllList;
    }



    //                              |------------------------------------ 1/ Fonction createArticle -----------------------------------|




    function supprimer() {
   
        require "app/views/backOffice/supprimer.php";  
    }



}