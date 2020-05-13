<?php
namespace Projet\Controllers;

/*
                                | -------------------------------ARTICLECONTROLLER--------------------------------- | 
                                |                                                                                   |
                                |                             1/ Fonction article                                   |
                                |                             2/ Fonction createArticle                             |
                                |                             3/ Fonction updateArticle                             |   
                                |                             4/ Fonction deleteArticle                             | 
                                |                                                                                   |                                                             
                                |-----------------------------------------------------------------------------------|
*/

class ArticleController{



//                              |---------------------------- 1/ Fonction createArticle -----------------------------|



function createArticle(){
    $article = new \Projet\Models\Article($_REQUEST['title'],$_REQUEST['content'],$_REQUEST['image'],$_REQUEST['ref_page']);
    \Projet\Models\ArticleManager::createArticle($article);
    header('Location: /admin.php?action=ancien');
}



//                              |---------------------------- 2/ Fonction updateArticle -----------------------------|



function updateArticle(){
    $article = new \Projet\Models\Article($_REQUEST['title'],$_REQUEST['content'],$_REQUEST['image'],$_REQUEST['ref_page']);
    \Projet\Models\ArticleManager::updateArticle($article);
    header('Location: /admin.php?action=ancien');
    
}



//                              |----------------------------- 3/ Fonction deleteArticle ----------------------------|



function deleteArticle(){
    
    \Projet\Models\ArticleManager::deleteArticle($_GET["id"]);
    header('Location: /admin.php?action=ancien');
    
}

}