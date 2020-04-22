<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blog">
    <meta name="author" content="Stéphanie Lemaitre">
    <meta name="robots" content="nofollow">
    <?php
// J'appelle mes fichiers dans models
    include 'app/models/dbConnection.php';
    include 'app/models/CommentaireManager.php';
    include 'app/models/Commentaire.php';
    include 'app/models/ArticleManager.php';
    include 'app/models/Article.php';
    
// Si différent de vide alors on appele la variable commentaire dans commentaireController.php
// $_REQUEST = $_GET + $_POST + $_COOKIE par défaut

    if($_SERVER['QUERY_STRING'] == '/admin'){
            require_once 'app/views/backOffice/path.php';
            
    }
    if (!empty($_REQUEST['create'])) {
        if ($_REQUEST['create'] == 'commentaire') {
            include 'app/controllers/commentaireController.php';
        } elseif ($_REQUEST['create'] == 'article') {
            include 'app/controllers/articleController.php';
            // dans ctrl
            createArticle();
        }
    } elseif (!empty($_REQUEST['update'])) {
        if ($_REQUEST['update'] == 'updateArticle') {
            include 'app/controllers/articleController.php';
            // dans ctrl
            updateArticle();
        }
    } elseif (!empty($_REQUEST['delete'])) {
        if ($_REQUEST['deleteArticle'] == 'deleteArticle') {
            include 'app/controllers/articleController.php';
            // dans ctrl
            deleteArticle();
        }
    }
    // if (!isset($_REQUEST['page']) && $_REQUEST['page'] !== 'admin') {
           // if(!isAdmin()){
            //    $_REQUEST['page'] = $_REQUEST['login'];
           // }
    // }

    ?>
</head>
<!-- On crée notre modéle de page qui sera rappellé a chaque $_REQUEST -->
<header>
    <?php
    // j'appelle un header different pour frontEnd et backOffice
    if (!isset($_REQUEST['page']) || $_REQUEST['page'] !== 'edit'&& $_REQUEST['page'] !== 'post' && $_REQUEST['page'] !== 'modifier' && $_REQUEST['page'] !== 'delete') {
        include 'app/views/frontEnd/templates/header.php';
    } else {
        include 'app/views/backOffice/templates/header.php';
    }
    ?>
</header>
<body>
    <!-- le body sera controllé par le controller pageController -->
<article>
    <?php
    include 'app/controllers/pageController.php';
    ?>
</article>
</body>
<footer>
    <?php
    // j'appelle un header different pour frontEnd et backOffice
    if (!isset($_REQUEST['page']) || $_REQUEST['page'] !== 'edit' && $_REQUEST['page'] !== 'post' && $_REQUEST['page'] !== 'modifier' && $_REQUEST['page'] !== 'delete') {
        include 'app/views/frontEnd/templates/footer.php';
    } else {
        include 'app/views/backOffice/templates/footer.php';
    }
    ?>

</footer>

</html>