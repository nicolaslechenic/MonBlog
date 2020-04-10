<?php

// On instancie la classe Commentaire
$article = new Article($_REQUEST['title'],$_REQUEST['content'],$_REQUEST['image'],$_REQUEST['ref_page']);

// :: = opérateur de résolution de portée = 
// permet d'appeler une classe static ou constant en dehors de celle-ci

// on appele la fonction createCommentaire dans la classe CommentaireManager
ArticleManager::createArticle($article);

// ArticleManager::updateArticle($article);

