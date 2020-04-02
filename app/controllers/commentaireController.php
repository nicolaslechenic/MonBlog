<?php

// On instancie la classe Commentaire
$commentaire = new Commentaire($_REQUEST['user_pseudo'],$_REQUEST['text'],$_REQUEST['ref_page']);

// :: = opérateur de résolution de portée = 
// permet d'appeler une classe static ou constant en dehors de celle-ci

// on appele la fonction createCommentaire dans la classe CommentaireManager
CommentaireManager::createCommentaire($commentaire);



