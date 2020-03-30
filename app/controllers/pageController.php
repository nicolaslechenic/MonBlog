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
        case "voyage1":
            $page = "page1";
            break;
        case "voyage2":
            $page = "page2";
            break;
        case "voyage3":
            $page = "page3";
            break;
        case "contact":
            $page = "page4";
            break;
        case "article":
            $page = "article";
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

}
