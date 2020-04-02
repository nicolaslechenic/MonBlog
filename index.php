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
// J'appele mes fichiers dans models
    include 'app/models/dbConnection.php';
    include 'app/models/CommentaireManager.php';
    include 'app/models/Commentaire.php';
    include 'app/models/ArticleManager.php';
    include 'app/models/Article.php';
    
// Si différent de vide alors on appel la variable commentaire dans commentaireController.php
// $_REQUEST = $_GET + $_POST + $_COOKIE par défaut
    if (!empty($_REQUEST['create'])) {
        if ($_REQUEST['create'] == 'commentaire') {
            include 'app/controllers/commentaireController.php';
        }
    }

    if (!isset($_REQUEST['page']) && $_REQUEST['page'] !== 'admin') {
           // if(!isAdmin()){
            //    $_REQUEST['page'] = $_REQUEST['login'];
           // }
    }

    ?>
</head>
<body>
<header>
    <?php
    if (!isset($_REQUEST['page']) || $_REQUEST['page'] !== 'admin') {
        include 'app/views/frontEnd/templates/header.php';
    } else {
        include 'app/views/backEnd/templates/header.php';
    }
    ?>
</header>

<article>
    <?php
    include 'app/controllers/pageController.php';
    ?>
</article>

<footer>
    <?php
    if (!isset($_REQUEST['page']) || $_REQUEST['page'] !== 'admin') {
        include 'app/views/frontEnd/templates/footer.php';
    }
    ?>

</footer>
</body>
</html>