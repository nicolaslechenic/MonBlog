/*
                                | -------------------------------------PLUGIN-------------------------------------- | 
                                |                                                                                   | 
                                |-----------------------------------------------------------------------------------|



!----- Pour installer et utiliser le Plugin -----!

- Créer une div avec la classe cursor sur une ou plusieurs pages.

- Créer ou télécharger une image svg/ou image png, placer cet élément dans votre div.

- Créer ( si ce n'est as déjà fait) un fichier style.css et un fichier plugin.js.

- Dans votre head copier/collier : 
            - <link rel="stylesheet" href="app/public/css/plugin.css">
            - <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
            
- Avant la balise </body> copier/collier :
            - <script src="app/public/js/plugin.js"></script>


*/

// Sur l'ensemble de ma fenêtre, quand je bouge la souris..
$(document).mousemove(function(event){
    // Ma classe prend la même lattitude et longitude que ma souris.
    $(".cursor").css({
        left: event.pageX,
        top: event.pageY
    });
});

  