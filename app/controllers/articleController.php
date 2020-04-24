<?php
namespace Projet\Controllers;
namespace Projet\Models;
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

class ArticleController extends ArticleManager{



//                              |------------------------------------ 1/ Fonction createArticle -----------------------------------|



function createArticle(){
    $article = new Article($_REQUEST['title'],$_REQUEST['content'],$_REQUEST['image'],$_REQUEST['ref_page']);
    ArticleManager::createArticle($article);
}



//                              |------------------------------------ 2/ Fonction updateArticle -----------------------------------|



function updateArticle(){
    $article = new Article($_REQUEST['title'],$_REQUEST['content'],$_REQUEST['image'],$_REQUEST['ref_page']);
    ArticleManager::updateArticle($article);
}



//                              |------------------------------------ 3/ Fonction deleteArticle -----------------------------------|



function deleteArticle(){
    $article = new Article($_REQUEST['title'],$_REQUEST['content'],$_REQUEST['image'],$_REQUEST['ref_page']);
    ArticleManager::deleteArticle($article);
}

}