<?php include 'app/views/frontEnd/templates/head.php'; ?>
<?php include 'app/views/backOffice/templates/header.php'; ?>

<div class="container">
    <h1 class="titreAdmin">Modifier article</h1>
    <form class="formAdmin" action="" method="post" accept-charset="utf-8">
        <span class="echo">
            <?php 
                    if(isset($_REQUEST["updateArticle"])){
                        echo "Votre article a bien été modifié !";
                    };
                ?>
        </span>
        <?php     
        foreach ($articlesList as $article) :        
        ?>
        <div class="blocTitrePost">

            <input
                class="titrePost"
                type="text"
                name="title"
                placeholder="Titre de l'article*"
                value="<?= $article->getTitle() ?>"
                required="required">

            <div class="file">

                <label for="file">
                    Insérer une image</label>
                <input
                    type="file"
                    name="image"
                    value="<?= $article->getImage(); ?>"
                    required="required">

            </div>
        </div>
        <div class="messagePost">
            <div class="choixPage">

                <label for="ref_page">Choisir la page :</label>

                <?php 
                        if(isset($_REQUEST['page']) ) : ?>
                <select name="ref_page" id="refPage" required="required">
                    <option value="<?= $article->getRefPage(); ?>"><?= $article->getRefPage(); ?></option>
                    <option value="Australie">Australie</option>
                    <option value="Nouvelle-zelande">Nouvelle-Zélande</option>
                    <option value="Trucs_et_astuces">Trucs et Astuces</option>

                </select>
                <?php endif ?>
            </div>

            <div class="">
                <textarea
                    class="texteAdmin"
                    name="content"
                    placeholder="Veuillez écrire le contenu de l'article *"
                    value=""
                    required="required"><?= $article->getContent(); ?></textarea>
            </div>
        </div>
        <div class="btnAdmin">

            <input type="hidden" name="updateArticle" value="updateArticle"/>
            <input type="submit" value="Modifier !">

        </div>
    </form>

</div>
<?php
    endforeach;
    ?>

<?php include 'app/views/backOffice/templates/footer.php'; ?>
<script>menuAct(1); </script>