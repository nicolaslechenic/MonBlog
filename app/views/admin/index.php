<?php require "app/views/templates/header.php"; ?>

        <div class="container">
            <h1 class="titreAdmin">Nouvel article</h1>
            <form class="formAdmin" action="">
                <div class="blocTitrePost">

                    <input
                        class="titrePost"
                        type="text"
                        name="titre"
                        placeholder="Titre de l'article*">
                    <div class="file">
                        <label for="file">
                            Insérer une image</label>
                        <input type="file" name="file">
                    </div>
                </div>
                <div class="messagePost">
                    <div class="choixPage">
                        <label for="refPage">Choisir la page :</label>

                        <select id="refPage">
                            <option value="australie">Australie</option>
                            <option value="nouvelle-zelande">Nouvelle-Zélande</option>
                            <option value="Trucs">Trucs et Astuces</option>

                        </select>
                    </div>
                    <div class="">
                        <textarea
                            class="texteAdmin"
                            name="contenu"
                            placeholder="Veuillez écrire le contenu de l'article *"></textarea>
                    </div>
                </div>
                <div class="btnAdmin">

                    <input type="submit" value="Poster!">

                </div>
            </form>

        </div>
        <?php require "app/views/templates/footer.php"; ?>
        <script>menuAct(0);</script>