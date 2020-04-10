<div class="containerDeux">
    <section class="blocArticles">

        <?php      
        while ($articleList = $article) :     
            ?> 
        <article class="">
            <img class="" src="app/public/images/<?= $article->getImage() ?>"></a>
        <h5><?= $article->getTitle() ?></h5>
        <p class="">Daté du :
            <?= $article->getCreationDate() ?></p>
        <p class="">
            <?= $article->getContent() ?></p>

    </article>

    <!-- <?php
    endwhile;
    ?> -->

</section>

</div>