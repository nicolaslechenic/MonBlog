<?php require "app/views/frontEnd/templates/head.php"; ?>
<?php require "app/views/frontEnd/templates/header.php"; ?>
<div class="containerTrois">
    <h1>Contact</h1>
    <p class="ssTitre">Vous avez une question ? Vous voulez me dire à quel point
        vous m'adorez ? Alors laissez moi un message et je vous répondrai dès que
        possible !</p>

    <form class="contact" action="">
        <div class="infosPerso">
            <input type="text" name="nom" class="nom" placeholder="Nom" required="required">
                <input
                    type="email"
                    name="email"
                    class="email"
                    placeholder="Email"
                    required="required"></div>
                <textarea
                    name="message"
                    id="message"
                    cols="30"
                    rows="10"
                    placeholder="Votre message"
                    required="required"></textarea>
                <input type="submit" class="submitContact"></form>

            </div>
<?php include 'app/views/frontEnd/templates/footer.php'; ?>           
<script>menuAct(4); </script>