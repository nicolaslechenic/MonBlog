<div class="containerDeux">
    <section class="blocArticles">


    <?php
    if (!empty($articlesList)):
        foreach ($articlesList as $article) :

            ?>
        <article class="article">
            <a href="?page=article"><img
                class="imgArticle"
                src="app/public/images/<?= $article->getImage() ?>"
                ></a>
                <h5><?= $article->getTitle() ?></h5>
                <p class="articleDate">Daté du : <?= $article->getCreationDate() ?></p>
                <p class="articleContent"> <?= $article->getContent() ?></p>
                <a class="savoir" href="?page=article">En savoir +</a>              

        </article>
    <?php
    endforeach;
    else:
        ?>
        <i>Aucun article n'a encore été publié</i>
    <?php
    endif;
    ?>
               

                            </section>

                        </div>