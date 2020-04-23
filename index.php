<?php
/*
                                | -----------------------------------ROUTEUR MVC----------------------------------- | 
                                |                                                                                   |                                                                                                                                       
                                |                   1/ Head + models                                                |
                                |                   2/ Chemin absolu Htaccess                                       |
                                |                   3/ Controller Article + Controller Commentaire                  |
                                |                   4/ Ossature header + Page Controller + footer                   |
                                |                                                                                   | 
                                |-----------------------------------------------------------------------------------|
*/



//                              |--------------------------------- 1/ HEAD + MODELS --------------------------------|



    // J'appelle mon head qui est dynamique(en cours)
        require_once 'app/views/frontEnd/templates/head.php';

    // J'appelle mes fichiers dans models ( appel de la bdd, des objets, des CRUD et autres fonctions)
        require_once 'app/models/dbConnection.php';
        require_once 'app/models/Commentaire.php';
        require_once 'app/models/CommentaireManager.php';
        require_once 'app/models/Article.php';
        require_once 'app/models/ArticleManager.php';
        
    


//                              |----------------------------- 2/ Chemin absolu Htaccess/Htpasswd ---------------------------|



/* 
 Le fichier/extension Htaccess permettent d'établir des règles qui sont interprétées par le serveur (Apache). 
 Le fichier path.php = chemin absolu du .htpasswd qui sera inscrit dans le Htaccess.
 Une fois sur le serveur le chemin absolu n'est plus utile.
*/
    /* 
       $_SERVER = tableau contenant le chemin du script
       QUERY_STRING = requête de chaine de caractére
       Si dans mon URL, le server trouve '/admin' alors il ira chercher path.php pour faire un echo du chemin absolu de .htpasswd 
    */

        if($_SERVER['QUERY_STRING'] == '/admin'){
            require_once 'app/views/backOffice/path.php';        
        }



//                               |----------------- 3/ Controller Article + Controller Commentaire -----------------|            



/* 
 isset = si différent de vide -> alors on appele la variable commentaire dans commentaireController.php 
 $_REQUEST = $_GET + $_POST + $_COOKIE par défaut
*/

    /* 
     Dans les formulaires de creation, modification et suppression(article/commentaire), j'ai inséré un 'input hidden' avec un 'name' et une 'value'.
     Si je récupére bien le 'name' et que ce 'name' et bien = à sa 'value' alors j'appelle le controller et j'applique sa fonction.
    */
        if (isset($_REQUEST['create'])) {
            if ($_REQUEST['create'] == 'commentaire') {
                require_once 'app/controllers/commentaireController.php';
            } elseif ($_REQUEST['create'] == 'article') {
                require_once 'app/controllers/articleController.php';
                // dans controller
                createArticle();
            }
        } elseif (isset($_REQUEST['update'])) {
            if ($_REQUEST['update'] == 'updateArticle') {
                require_once 'app/controllers/articleController.php';
                // dans controller
                updateArticle();
            }
        } elseif (isset($_REQUEST['delete'])) {
            if ($_REQUEST['deleteArticle'] == 'deleteArticle') {
                require_once 'app/controllers/articleController.php';
                // dans controller
                deleteArticle();
            }
        }
    


//                               |----------------- 4/ Ossature header + Page Controller + footer -----------------|



/*  
 On crée notre modéle de page qui sera rappellé a chaque $_REQUEST['page] => voir pageController
 empty = vide
 Si ma requête 'page' est vide, ou si elle est differente des pages ... alors j'affiche, sinon, j'affiche ...
*/

    // J'appelle un header différent pour frontEnd et backOffice
        if (empty($_REQUEST['page']) || ($_REQUEST['page'] !== 'edit'&& $_REQUEST['page'] !== 'post' && $_REQUEST['page'] !== 'modifier' && $_REQUEST['page'] !== 'delete')) {
            require_once 'app/views/frontEnd/templates/header.php';
        } else {
            require_once 'app/views/backOffice/templates/header.php';
        }
    

    //  le body sera controllé par le controller pageController
        require_once 'app/controllers/pageController.php';

    // j'appelle un footer différent pour frontEnd et backOffice
        if (empty($_REQUEST['page']) || ($_REQUEST['page'] !== 'edit' && $_REQUEST['page'] !== 'post' && $_REQUEST['page'] !== 'modifier' && $_REQUEST['page'] !== 'delete')) {
            require_once 'app/views/frontEnd/templates/footer.php';
        } else {
            require_once 'app/views/backOffice/templates/footer.php';
        }
?>



