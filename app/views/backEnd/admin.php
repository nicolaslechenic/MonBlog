<!-- <?php
    include './templates/header.php';
    ?> -->
            

        <div class="container">
            <h1 class="titreAdmin">Nouvel article</h1>
            <form class="formAdmin" action="" method="post" accept-charset="utf-8">
                <div class="blocTitrePost">

                    <input
                        class="titrePost"
                        type="text"
                        name="title"
                        placeholder="Titre de l'article*">

                    <div class="file">

                        <label for="file">
                            Insérer une image</label>
                        <input type="file" name="image">

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
                            name="content"
                            placeholder="Veuillez écrire le contenu de l'article *"></textarea>
                    </div>
                </div>
                <div class="btnAdmin">

                    <input type="submit" value="Poster!">

                </div>
            </form>

        </div>
        <!-- <?php
    include './templates/footer.php';
    ?> -->
        