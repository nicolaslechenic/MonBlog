<?php
namespace Projet\Controllers;
/*
                                | ------------------------------------CONTROLLER----------------------------------- | 
                                |                                                                                   |
                                |                             1/ Fonction accueil                                   |
                                |                             2/ Fonction austra                                    |
                                |                             3/ Fonction nZ                                        |   
                                |                             4/ Fonction trucs                                     | 
                                |                             5/ Fonction contact                                   | 
                                |                             6/ Fonction article                                   |
                                |                             7/ Fonction Form                                      |
                                |                             8/ Fonction CGU                                       |
                                |                                                                                   |                                                              
                                |-----------------------------------------------------------------------------------|
*/


class Controller{



//                              |------------------------------- 1/ Fonction accueil -------------------------------|



    function accueil() { 
        $title = "Mon blog Austra-Zelandia ";   
        require "./app/views/frontEnd/pages/accueil.php";
    }



//                              |-------------------------------- 2/ Fonction austra --------------------------------|



    function austra() {
        $articleManager = new \Projet\Models\ArticleManager();
        $articlesList = $articleManager->readArticles($_REQUEST['action']);
        
        $commentManager = new \Projet\Models\CommentManager();
        $commentsList = $commentManager->readComments($_REQUEST['action']);
        
        require "./app/views/frontEnd/pages/australie.php";
        
    }



//                              |--------------------------------- 3/ Fonction nZ -----------------------------------|



    function nZ() {
        $articleManager = new \Projet\Models\ArticleManager();
        $articlesList = $articleManager->readArticles($_REQUEST['action']);

        $commentManager = new \Projet\Models\CommentManager();
        $commentsList = $commentManager->readComments($_REQUEST['action']);

        require "./app/views/frontEnd/pages/n-Zelande.php";
        
    }



//                              |--------------------------------- 4/ Fonction trucs --------------------------------|



    function trucs() {
        $articleManager = new \Projet\Models\ArticleManager();
        $articlesList = $articleManager->readArticles($_REQUEST['action']);

        $commentManager = new \Projet\Models\CommentManager();
        $commentsList = $commentManager->readComments($_REQUEST['action']);

        require "./app/views/frontEnd/pages/trucs.php";
        
    }
    
    

//                              |-------------------------------- 5/ Fonction contact --------------------------------|



    function contact() {
        require "./app/views/frontEnd/pages/contact.php";
    
    }



//                              |--------------------------------- 6/ Fonction Article -------------------------------|



    function article() {
        $articleManager = new \Projet\Models\ArticleManager();
        $article = $articleManager->readOneArticle();

        $commentManager = new \Projet\Models\CommentManager();
        $commentsList = $commentManager->readComments($_REQUEST['action']);

        require "./app/views/frontEnd/pages/article.php";
        
    }


//                              |-------------------------------- 7/ Fonction Formulaire -----------------------------|    



    function form(){
        $formManager = new \Projet\Models\FormManager();
        $contact = $formManager->contact();
        
    }

    

//                              |----------------------------------- 8/ Fonction CGU ---------------------------------|



    function cgu(){
        require "./app/views/frontEnd/pages/cgu.php"; 
    }



//                              |----------------------------------- 9/ Fonction cookie ---------------------------------|

    function cookie(){
        require "./app/views/frontEnd/cookie/cookie.php"; 
    }


}



