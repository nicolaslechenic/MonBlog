<?php
/*
                                | ---------------------------COMMENTAIRECONTROLLER--------------------------------- | 
                                |                                                                                   |
                                |-----------------------------------------------------------------------------------|
*/


// On instancie la classe Commentaire
    $commentaire = new Commentaire($_REQUEST['user_pseudo'],$_REQUEST['text'],$_REQUEST['ref_page']);

/* 
 On appelle la fonction createCommentaire dans la classe CommentaireManager
 Cette fonction est utilisée sur pageController
*/
    CommentaireManager::createCommentaire($commentaire);



