<?php
/*
                                | -------------------------------ARTICLECONTROLLER--------------------------------- | 
                                |                                                                                   |
                                |                             1/ Fonction article                                   |
                                |                             2/ Fonction createArticle                             |
                                |                             3/ Fonction updateArticle                              |   
                                |                             4/ Fonction deleteArticle                             | 
                                |                                                                                   |                                                             
                                |-----------------------------------------------------------------------------------|
*/



//                              |------------------------------------ 1/ Fonction article -----------------------------------|



function article(){
// On instancie la classe Article
    return new Article($_REQUEST['title'],$_REQUEST['content'],$_REQUEST['image'],$_REQUEST['ref_page']);
}



//                              |------------------------------------ 1/ Fonction createArticle -----------------------------------|



function createArticle(){
    $article = article();
    ArticleManager::createArticle($article);
}



//                              |------------------------------------ 3/ Fonction updateArticle -----------------------------------|



function updateArticle(){
    $article = article();
    ArticleManager::updateArticle($article);
}



//                              |------------------------------------ 4/ Fonction deleteArticle -----------------------------------|



function deleteArticle(){
    $article = article();
    ArticleManager::deleteArticle($article);
}

