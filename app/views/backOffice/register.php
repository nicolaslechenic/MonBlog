<!--  
                                | ------------------------------INSCRIPTION ADMIN---------------------------------- | 
                                |                                                                                   |
                                |-----------------------------------------------------------------------------------|
-->

<!-- Appel le template head -->
<?php include "./app/views/frontEnd/templates/head.php"; ?>

<!-- MAIN -->
<main class="blocInscription">
    <h1 class="titreInscrip">Inscription Administrateur</h1>
    <!-- Affiche les messaged d'erreurs quand le formulaire est mal rempli -->
    <div class="errors">
        <?php 
        
        // Si différent de vide
        if (!empty($_POST)) {
            // Si pas de pseudo et si il est different du preg_match alors message d'erreur
            if (empty($_POST['pseudo']) || !preg_match( "#^[A-Za-z0-9_]{3,20}$#", $_POST['pseudo'])) {
                echo "Votre pseudo n'est pas correct ! Il doit contenit entre 3 et 16 caractères sans espace ni caractères spéciaux !";
                
            }
        }   
        ?>
    </div>
    <div class="errorsEmail">
        <?php 
        // Si différent de vide
            if (!empty($_POST)) {
                // Si pas d'email et si il est different du filtre alors message d'erreur
                if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    echo "Votre email n'est pas correct !";
                    
                }
            }
            ?>
    </div>
    <div class="errorsPW">
        <?php 
        // Si différent de vide
            if (!empty($_POST)) {
                // Si pas de mot de passe et si il est différent du preg_match et s'il est différent de celui de la confirmation alors message d'erreur
                if (empty($_POST['password']) || !preg_match( "#^[A-Za-z0-9_]{8,20}$#", $_POST['password'])) {
                    echo "Votre mot de passe n'est pas correct !";
                    }elseif(($_POST['password'] != $_POST['confirmation'])){
                        echo "Votre mot de passe de différent de la confirmation !";
                    }
                
            }
        ?>
    </div>
                   
    <!-- Formulaire pour s'inscire en tant que Administrateur -->
    <form class="formInscrip" action="admin.php?action=inscription" method="POST">
        <!-- Pseudo -->
        <div class="inscrip">
            <label for="pseudo">Pseudo : </label>          
            <input type="text" name="pseudo" required>
        </div>
        <!-- Email -->
        <div class="inscrip">
            <label for="pseudo">Email : </label>          
            <input type="email" name="email" required>
        </div> 
        <!-- Mot de passe -->  
        <div class="inscrip">
            <label for="password">Mot de passe :</label>           
            <input type="password" name="password" required>
        </div>
        <!-- Confirmation -->    
        <div class="inscrip">
            <label for="confirmation">Confirmation du mot de passe : </label>          
            <input type="password" name="confirmation" required>
        </div>
        <button type="submit">S'inscrire</button>
    </form>
</main>

 <!-- Appel le template footer-->   
<?php require "./app/views/backOffice/templates/footer.php"; ?>
