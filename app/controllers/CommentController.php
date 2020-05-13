<?php
namespace Projet\Controllers;


/*
                                | -------------------------------COMMENTCONTROLLER-------------------------------- | 
                                |                                                                                   |
                                |                        1/ Fonction createCommentaire                              |
                                |                                                                                   |                                                            
                                |-----------------------------------------------------------------------------------|
*/



class CommentController {



//                              |---------------------------- 1/ Fonction createCommentaire -------------------------|



function newComment(){
    $comment = new \Projet\Models\Comment($_REQUEST['user_pseudo'],$_REQUEST['content'],$_REQUEST['ref_page']);
    \Projet\Models\CommentManager::createComment($comment);
    header('Location: index.php?action='.$comment->getRefPage());


}

}