<?php require "app/views/templates/header.php"; ?>


        <div class="containerTrois">
            <h1>Contact</h1>
            <p class="ssTitre">Vous avez une question ? Vous voulez me dire à quel point vous m'adorez ? Alors laissez moi un message et je vous répondrai dès que possible !</p>

            <form class="contact" action="">
                <div class="infosPerso">
           <input type="text" name="nom" class="nom" placeholder="Nom" required>
           <input type="email" name="email" class="email" placeholder="Email" required></div>
           <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message" required></textarea>
           <input type="submit" class="submitContact">
           </form>
                
      </div>
    <!-- Zone de commentaires -->
    <div class="blocCommentaire">
        <div class="zoneText">
            <input type="pseudo" name="pseudo" id="pseudo" placeholder="Pseudo">
            <textarea
                name="commentaire"
                id="commentaire"
                cols="30"
                rows="10"
                placeholder="Veuillez écrire votre commentaire ici"></textarea>
        </div>
        <div class="showCommentaire">
            <div class="contenuCom">
                <p class="com">Ecrit par : Pseudo</p>
                <p class="com">Daté du : 19/03/2019</p>
                <p class="com">Commentaire :
                </p>
                <p class="com">Trop trop bien ! Je voyage !</p>
            </div>
            <div class="contenuCom">
                <p class="com">Ecrit par : Pseudo2</p>
                <p class="com">Daté du : 17/03/2019</p>
                <p class="com">Commentaire :
                </p>
                <p class="com">Trop trop bien ! Je voyage ! Tralalal louou lila troulouou</p>
            </div>
            <div class="contenuCom">
                <p class="com">Ecrit par : Pseudo3</p>
                <p class="com">Daté du : 11/03/2019</p>
                <p class="com">Commentaire :
                </p>
                <p class="com">Trop trop bien ! Je voyage ! AAhhhh grrrrhhh bouh</p>
            </div>
            <div class="contenuCom">
                <p class="com">Ecrit par : Pseudo</p>
                <p class="com">Daté du : 19/03/2019</p>
                <p class="com">Commentaire :
                </p>
                <p class="com">Trop trop bien ! Je voyage ! Il était un fois un tit oiseau qui
                    mangeait du pain !</p>
            </div>
        </div>
    </div>

    <?php require "app/views/templates/footer.php"; ?>
    <script>menuAct(4); </script>