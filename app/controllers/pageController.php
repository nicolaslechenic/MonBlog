<?php
// Créaction du routeur

// Si vide, alors on affiche la page accueil
if (empty($_REQUEST['page'])) {
    include 'app/views/frontEnd/pages/accueil.php';
} 
// Sinon on affiche les autres pages (voir ul header)
else {
    $page = "";
    $pageAdmin ="";
    switch ($_REQUEST['page']) {
        case "Australie":
            $page = "page1";
            break;
        case "Nouvelle-zelande":
            $page = "page2";
            break;
        case "Trucs_et_astuces":
            $page = "page3";
            break;
        case "contact":
            $page = "page4";
            break;
        case "article":
            $page = "article";
            break;
        case "admin":
            $pageAdmin = "admin";
            break;
        case "post":
            $pageAdmin = "post";
            break;
        default:
            $page = 'accueil';
            break;
    }

    if($page){
        include 'app/views/frontEnd/pages/' . $page . '.php';
    }else{
        include 'app/views/backEnd/' . $pageAdmin . '.php';
    }
    
    
    // Condition pour afficher commentaireForm.php sur toutes les pages sauf sur la page 4
    if ($page != "page4" && $pageAdmin != "admin" && $pageAdmin !="post") {
        // :: = opérateur de résolution de portée = 
        // permet d'appeler une classe static ou constant en dehors de celle-ci
        $commentairesList = CommentaireManager::readCommentaires($_REQUEST['page']);
        include 'app/views/frontEnd/commentaires/commentaireForm.php';
    }
    elseif ($page != "page4" && $page !="accueil") {
        // :: = opérateur de résolution de portée = 
        // permet d'appeler une classe static ou constant en dehors de celle-ci
        $articlesList = ArticleManager::readArticles($_REQUEST['page']);
        // include 'app/views/frontEnd/commentaires/articleForm.php';
    }
   

}
