
<?php include 'app/views/frontEnd/templates/head.php'; ?>
<?php include 'app/views/frontEnd/templates/header.php'; ?>
<div class="containerDeux">
    <section class="blocArticles">
    <?php      
        foreach ($articlesList as $article) :     
    ?>
        <article class="oneArticle">
            <h1 class="titreOneArticle"><?= $article->getTitle() ?></h1>    
            <img
                class="imageOneArticle"
                src="app/public/images/<?= $article->getImage() ?>"></a>
            <p class="contentOneArticle"><?= $article->getContent() ?></p>
        </article>

    <?php
        endforeach;
    ?>
    </section>

</div>

