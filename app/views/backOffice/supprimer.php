<?php include 'app/views/frontEnd/templates/head.php'; ?>
<?php include 'app/views/backOffice/templates/header.php'; ?>

<div class="container">
    <h1 class="titreAdmin">Suppresion de votre article</h1>
    <form class="formAdmin" action="" method="post" accept-charset="utf-8">
        <span class="echo">
                <?php 
                    if(isset($_REQUEST["delete"])){
                        echo "Votre article a bien été supprimé !";
                    };
                ?>
        </span>
 <div class="blocTitrePost">
        <h2>Etes-vous sur de vouloir suprimer cet article ?</h2>
        
        <input type="hidden" name="deleteArticle" value="deleteArticle"/>
        <input type="submit" name="delete" value="Oui,j'en suis sur !">
       
        </div>
    </form>
</div>

<?php include 'app/views/backOffice/templates/footer.php'; ?>
<script>menuAct(1); </script>