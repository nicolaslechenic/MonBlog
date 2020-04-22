<?php

// On instancie la classe Article
function article(){

return new Article($_REQUEST['title'],$_REQUEST['content'],$_REQUEST['image'],$_REQUEST['ref_page']);
}

// :: = opérateur de résolution de portée = 
// permet d'appeler une classe static ou constant en dehors de celle-ci

// on appele la fonction createArticle dans la classe ArticleManager

function createArticle(){
    $article = article();
    ArticleManager::createArticle($article);
}

function updateArticle(){
    $article = article();
    ArticleManager::updateArticle($article);
}
function deleteArticle(){
    $article = article();
    ArticleManager::deleteArticle($article);
}

