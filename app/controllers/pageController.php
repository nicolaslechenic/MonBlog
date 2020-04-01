<?php
// Créaction du routeur

// Si vide, alors on affiche la page accueil
if (empty($_REQUEST['page'])) {
    include 'app/views/frontEnd/pages/accueil.php';
} 
// Sinon on affiche les autres pages (voir ul header)
else {
    $page = "";
    switch ($_REQUEST['page']) {
        case "Austalie":
            $page = "page1";
            break;
        case "Nouvelle-zelande":
            $page = "page2";
            break;
        case "Trucs et astuces":
            $page = "page3";
            break;
        case "contact":
            $page = "page4";
            break;
        case "article":
            $page = "article";
            break;
        case "admin":
            $page = "admin";
            break;
        case "post":
            $page = "post";
            break;
        default:
            $page = 'accueil';
            break;
    }

    include 'app/views/frontEnd/pages/' . $page . '.php';
    
    // Condition pour afficher commentaireForm.php sur toutes les pages sauf sur la page 4
    if ($page != "page4") {
        // :: = opérateur de résolution de portée = 
        // permet d'appeler une classe static ou constant en dehors de celle-ci
        $commentairesList = CommentaireManager::readCommentaires($_REQUEST['page']);
        include 'app/views/frontEnd/commentaires/commentaireForm.php';
    }
    elseif ($page != "page4" && "accueil") {
        // :: = opérateur de résolution de portée = 
        // permet d'appeler une classe static ou constant en dehors de celle-ci
        $articlesList = ArticleManager::readArticles($_REQUEST['page']);
        // include 'app/views/frontEnd/commentaires/articleForm.php';
    }
    elseif ($page = "admin" || "post") {
      include 'app/views/backEnd/' . $page . '.php';  
    }

}
