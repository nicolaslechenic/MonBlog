<?php
namespace Projet\Controllers;
namespace Projet\Models;

/*
                                | -----------------------------COMMENTAIRECONTROLLER------------------------------- | 
                                |                                                                                   |
                                |                        1/ Fonction createCommentaire                              |
                                |                                                                                   |                                                            
                                |-----------------------------------------------------------------------------------|
*/



class CommentaireController extends CommentaireManager{



//                              |---------------------------- 1/ Fonction createCommentaire -------------------------|



function createCommentaire(){
    $commentaire = new Commentaire($_REQUEST['user_pseudo'],$_REQUEST['text'],$_REQUEST['ref_page']);
    CommentaireManager::createCommentaire($commentaire);
}

}