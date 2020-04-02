
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
        if ($_REQUEST['create'] == 'commentaire')
            include 'app/controllers/commentaireController.php';
    }

    ?>
</head>
<body>
<header>
    <?php
    include 'app/views/frontEnd/templates/header.php';
    ?>
</header>

<article>
    <?php
    include 'app/controllers/pageController.php';
    ?>
</article>

<footer>
    <?php
    include 'app/views/frontEnd/templates/footer.php';
    ?>

</footer>
</body>
</html>