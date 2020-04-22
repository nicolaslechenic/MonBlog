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
        case "edit":
            $pageAdmin = "edit";
            break;
        case "post":
            $pageAdmin = "post";
            break;
        case "modifier":
            $pageAdmin = "modifier";
            break;
        case "delete":
            $pageAdmin = "delete";
            break;
        default:
            $page = 'accueil';
            break;
    }

// Condition pour afficher les articles les pages
    if ($page != "page4" && $page != "accueil" && $pageAdmin != "edit" && $pageAdmin != "modifier" && $pageAdmin != "delete") {
        if ($pageAdmin != "post" && $page != "article") {
            /* :: = opérateur de résolution de portée =
             permet d'appeler une classe static ou constant en dehors de celle-ci */
            $articlesList = ArticleManager::readArticles($_REQUEST['page']);
            include 'app/views/frontEnd/articles/articles.php';
        }elseif($page == "article" && $pageAdmin =="post"){
            $articlesList = ArticleManager::readArticles($_REQUEST['page']);     
        }else{
            $articlesAllList = ArticleManager::readAllArticles($_REQUEST['page']);     
        }
    }
    if( $pageAdmin == "modifier"  ){
        $articlesList = ArticleManager::readOneArticle();
        
    }elseif($page == "article"){
        $articlesList = ArticleManager::readOneArticle();
        include 'app/views/frontEnd/pages/articleForm.php';
    }
    

    
// Condition pour afficher les commentaires sur les pages        
    if ($page != "accueil" && $page != "page4" && $pageAdmin != "edit" && $pageAdmin != "post" && $pageAdmin != "modifier" && $pageAdmin != "delete") {          
        $commentairesList = CommentaireManager::readCommentaires($_REQUEST['page']);
        include 'app/views/frontEnd/commentaires/commentaireForm.php';
    }
    // Découpe le chemin pour mettre .php aux variables
    if($page){
        include 'app/views/frontEnd/pages/' . $page . '.php';
    }else{
        include 'app/views/backOffice/' . $pageAdmin . '.php';
    }

}
