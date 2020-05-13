<?php
namespace Projet\Controllers;

/*
                                | --------------------------------ADMINCONTROLLER---------------------------------- | 
                                |                                                                                   |
                                |                             1/ Fonction editer                                    |
                                |                             2/ Fonction modifier                                  |
                                |                             3/ Fonction ancien                                    |   
                                |                             4/ Fonction supprimer                                 | 
                                |                             5/ Fonction login                                     |
                                |                             6/ Fonction inscription                               |                                
                                |                             7/ Fonction compteAdmin                               |                                                             
                                |                                                                                   |
                                |-----------------------------------------------------------------------------------|
*/



class AdminController
{



//                              |-------------------------------- 1/ Fonction editer -------------------------------|



    public function edit()
    {
        require "app/views/backOffice/edit.php";
    }



//                              |-------------------------------- 2/ Fonction modifier -----------------------------|



    public function update()
    {
        $articleManager = new \Projet\Models\ArticleManager();
        $article = $articleManager->readOneArticle();

        require "app/views/backOffice/update.php";
    }



//                              |------------------------------- 3/ Fonction ancien --------------------------------|



    public function listArticles()
    {
        $articleManager = new \Projet\Models\ArticleManager();
        $articlesAllList = $articleManager->readAllArticles();

        require "./app/views/backOffice/listArticles.php";
    }



//                              |------------------------------ 4/ Fonction supprimer ------------------------------|




    public function delete()
    {
        require "./app/views/backOffice/delete.php";
    }



//                              |--------------------------------- 5/ Fonction login -------------------------------|



    public function loginAdmin()
    {
        if(!empty($_POST)){
        $pseudo = $_POST["pseudo"];
        $passwd = $_POST["password"];
            
        $objet = new \Projet\Models\AdminManager();      
        $error = $objet->login($pseudo, $passwd);
        }        
            
        require "./app/views/backOffice/login.php";
    }



//                              |----------------------------- 6/ Fonction inscription -----------------------------|



    public function register()
    {
        if(!empty($_POST)){
            $connexion = new \Projet\Models\Connexion($_REQUEST['pseudo'], $_REQUEST['email'], $_REQUEST['password']);
            \Projet\Models\AdminManager::createCompte($connexion);
            header("location: admin.php?action=connexion");      
            } 
        
        
        require "./app/views/backOffice/register.php";
    }



//                              |----------------------------- 7/ Fonction compteAdmin -----------------------------|



      
    
    
}
