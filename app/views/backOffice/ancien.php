<?php include 'app/views/frontEnd/templates/head.php'; ?>
<?php include 'app/views/backOffice/templates/header.php'; ?>
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

            <?php 
            if (!empty($articlesAllList)):
        foreach ($articlesAllList as $articleAll) :
            ?>
            <tr>
                <td><?= $articleAll->getTitle() ?></td>
                <td><?= $articleAll->getRefPage() ?></td>
                
                <td>
                <a href="?page=modifier&id=<?= $articleAll->getId(); ?>">
                        <i class="material-icons" style="font-size:36px">cached</i>
                    </a>
                </td>
                <td>
                    
                <a href="?page=delete&id=<?= $articleAll->getId(); ?>">
                        <i class="material-icons" style="font-size:36px">delete</i>
                        
                    </a>
                </td>
            </tr>
        <?php
    endforeach;
    else:
        ?>
            <i>Aucun article n'a encore été publié</i>
            <?php
    endif;
    ?>

        </table>
    </div>
    
<?php include 'app/views/backOffice/templates/footer.php'; ?>
<script>menuAct(1); </script>