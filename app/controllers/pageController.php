<?php
// Créaction du routeur

// Si vide, alors on affiche la page accueil
if (empty($_REQUEST['page'])) {
    include 'app/views/frontEnd/pages/accueil.php';
} 
// Sinon on affiche les autres pages (voir ul header)
else {
    $page = "";
    $pageAdmin = "";
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

// Condition pour afficher commentaireForm.php sur toutes les pages
    if ($page != "page4" && $page != "accueil") {
        if ($pageAdmin != "admin" && $pageAdmin != "post") {
            // :: = opérateur de résolution de portée =
            // permet d'appeler une classe static ou constant en dehors de celle-ci
            $articlesList = ArticleManager::readArticles($_REQUEST['page']);
            include 'app/views/frontEnd/articles/articles.php';
        }elseif($pageAdmin != "admin"){
            $articlesAllList = ArticleManager::readAllArticles($_REQUEST['page']);     
        }
        
        if ($pageAdmin != "admin" && $pageAdmin != "post") {          
            $commentairesList = CommentaireManager::readCommentaires($_REQUEST['page']);
            include 'app/views/frontEnd/commentaires/commentaireForm.php';
        }
        
    }

    if($page){
        include 'app/views/frontEnd/pages/' . $page . '.php';
    }else{
        include 'app/views/backEnd/' . $pageAdmin . '.php';
    }

}
