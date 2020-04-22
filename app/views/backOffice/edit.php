
<div class="container">
    <h1 class="titreAdmin">Nouvel article</h1>
    <form class="formAdmin" action="" method="post" accept-charset="utf-8">
        <span class="echo">
                <?php 
                    if(isset($_REQUEST["createArticle"])){
                        echo "Votre article a bien été crée !";
                    };
                ?>
        </span>
        <div class="blocTitrePost">
            
            <input
                class="titrePost"
                type="text"
                name="title"
                placeholder="Titre de l'article*"
                required="required">

            <div class="file">

                <label for="file">
                    Insérer une image</label>
                <input type="file" name="image" required="required">

            </div>
        </div>
        <div class="messagePost">
            <div class="choixPage">

                <label for="ref_page">Choisir la page :</label>

                <?php if(isset($_REQUEST['page']) ) : ?>
                <select name="ref_page" id="refPage" required="required">

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
                    required="required"></textarea>
            </div>
        </div>
        <div class="btnAdmin">

            <input type="hidden" name="createArticle" value="article"/>
            <input type="submit" value="Poster!">

        </div>
    </form>

</div>