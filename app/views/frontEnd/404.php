<?php include 'app/views/frontEnd/templates/head.php'; ?>

    <body>
        <div class="main">
            <div class="bloc404">
                <h1 class="titre404">OUPS ! On a perdu la page ?!!</h1>
                <p class="text404">Ce petit monstre a dû la dévorer !</p>
                <p class="text404">Vite pas ici !</p>
                <button class="btn404" onclick="window.location.href='/index.php?action=accueil'">Issue de secours</button>
            </div>
            
            <img class="monstre" src="app/public/images/dessin.svg" alt="image svg">
        </div>
    </body>
</html>