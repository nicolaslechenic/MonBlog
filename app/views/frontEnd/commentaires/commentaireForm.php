<section class="blocCommentaire">
    
    <form class="zoneText" action="" method="post" accept-charset="utf-8">
        
            <input id="pseudo" type="text" name="user_pseudo" size="50" maxlength="250" required="required" placeholder="Votre pseudo"/>
        </label>
        
            <textarea id="commentaire" name="text" rows="10" cols="30" required="required"></textarea>
        </label>
        <input type=hidden name="ref_page" value="<?= $_REQUEST["page"] ?>"/>
        <input type=hidden name="create" value="commentaire"/>
        <input type="Submit" name="submit" value="Envoyer un commentaire"/>
    </form>

      
            
            
<div class="showCommentaire">
<?php
    if (!empty($commentairesList)):
        foreach ($commentairesList as $commentaire) :
            ?>

<div class="contenuCom">


    <p class="com">Ecrit par : <?= $commentaire->getUserPseudo() ?></p>
    <p class="com">Daté du : <?= $commentaire->getCreationDate() ?></p>
    <p class="com">Commentaire : </p>
    <p class="com"><?= $commentaire->getContent() ?></p>
</div>

  <?php
        endforeach;
    else:
        ?>
        <i>Aucun commentaire n'a encore été publié</i>
    <?php
    endif;
    ?>

        </div>

      
</section>





        
   
    