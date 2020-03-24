<?php require "app/views/templates/header.php"; ?>

        <div class="container">
            <h1 class="titreAdmin">Anciens Articles</h1>
            <div class="tableau">
                <table>
                    <tr class="hautTableau">
                        <td>Titre de l'article</td>
                        <td>Nom de la page</td>
                        <td>Modifier</td>
                        <td>Supprimer</td>
                    </tr>
                    <tr>
                        <td>Il était une fois</td>
                        <td>Australie</td>
                        <td><a href="modifier.php"  class=""><i class="material-icons" style="font-size:36px">cached</i></a></td>
                        <td><a href="supprimer.php" class=""><i class="material-icons" style="font-size:36px">delete</i></a></td>
                    </tr>
                    <tr>
                        <td>Il était une autre fois</td>
                        <td>Trucs et Astuces</td>
                        <td><a href="modifier.php"  class=""><i class="material-icons" style="font-size:36px">cached</i></a></td>
                        <td><a href="supprimer.php" class=""><i class="material-icons" style="font-size:36px">delete</i></a></td>
                    </tr>
                </table>
            </div>

            <?php require "app/views/templates/footer.php"; ?>
            <script>menuAct(1);</script>