<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mon blog Austra-Zelandia</title>     
        
         <!-- réfèrencement -->
         <meta name="keywords" content="accueil">
         <meta
             name="description"
             content="Bienvenue sur mon blog Austra-Zelandia ! Venez partager avec moi mes étapes dans ce voyages !">
         <!--feuilles de styles-->
         <link rel="stylesheet" href="app/public/css/style.css">
         <link rel="stylesheet" href="public/css/media.css">
         <!-- google font -->
         <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
         <!-- script jquery -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </head>
    <body>
        <header>
            <div class="logo">
                <img src="public/images/koala1.svg" alt="image svg">
            </div>
            <nav class="menu-principal">
                <div class="menu">
                    <input type="checkbox" id="menu-mobile" role="button">
                    <label for="menu-mobile" class="menu-mobile">
                        <img src="public/images/menu.svg">
                    </label>
                    <ul id="menuActive">
                        <li class="nav">
                            <a href="index.html">
                                Accueil</a>
                        </li>
                        <li class="nav">
                            <a href="australie.html">
                                Australie</a>
                        </li>
                        <li class="nav">
                            <a href="n-Zelande.html">
                                Nouvelle-Zélande</a>
                        </li>
                        <li class="nav">
                            <a href="Trucs.html">
                                Trucs et astuces</a>
                        </li>
                        <li class="nav">
                            <a href="contact.html">
                                Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>

        <div class="container">
            <section class="main">
            <article class="bloc-intro">
                <div class="intro">
                    <h1>Bienvenue !</h1>
                    <p>Salutation visiteurs et visiteuses ! Et bienvenue ( oui je me répéte et alors ?) sur mon humble blog ! Et oui, je vous invite à partager avec moi ce voyage que j'ai fait il y a plus d'un an maintenant!<br>
                    Dieu que c'est passé vite ! Et encore aujourd'hui, lorsque je rereregarde ces photos j'ai beaucoup de mal à réaliser que j'y suis vraiment allée !</p>
                    

                </div>
                <!-- slider -->
                <div class="slider">
                    <ul id="slider-list">
                       <li>
                           <img src="public/images/slider1/slide1.1.JPG">
                       </li>
                       <li>
                        <img src="public/images/slider1/slide1.2.JPG">
                    </li>
                    <li>
                        <img src="public/images/slider1/slide1.3.JPG">
                    </li>
                    <li>
                        <img src="public/images/slider1/slide1.4.JPG">
                    </li>
                    <li>
                        <img src="public/images/slider1/slide1.5.JPG">
                    </li>
                       
                    </ul>
                  </div>

            </article>
            <article class="bloc-intro">
                
                <!-- slider -->
                <div class="slider slider2">
                    <ul id="slider-list">
                       <li>
                           <img src="public/images/slider2/slide2.1.JPG">
                       </li>
                       <li>
                        <img src="public/images/slider2/slide2.2.JPG">
                    </li>
                    <li>
                        <img src="public/images/slider2/slide2.3.JPG">
                    </li>
                    <li>
                        <img src="public/images/slider2/slide2.4.JPG">
                    </li>
                    <li>
                        <img src="public/images/slider2/slide2.5.JPG">
                    </li>
                       
                    </ul>
                  </div>
                  
                  <div class="intro">
                    <h2>T'es partis où ?</h2>
                    <p> Bande de petits curieux va ! Comme ma tendre moitié barbue et moi-même sommes partis de l'autre côté du globe pour qu'il puisse réaliser un de ses rêves de gamin: visiter l'Australie, nous avons décidé de faire la nouvelle-Zélande à la suite !<br>
                    Deux semaines dans l'un deux semaines dans l'autre ! Donc, comme vous êtes super fort en math, un mois entier ! Toute une aventure quoi !<br>
                    Alors oui, c'étais fatiguant, oui son chez-soi nous paraît loin, oui ils ne parlent pas un mot Français et pour se faire comprendre quand soi-même on parle un anglais lycéen ce n'est pas facile !<br>
                Mais il ne faut surtout pas s'arrêter à ces barrieres ! Sinon, on ne fait jamais rien !<br>
            </p>

                </div>

            </article>
        </section>
            <aside >
                <!-- API -->
                <h4>Pour savoir quel temps il fait chez vous, inscrivez le nom de votre ville !</h4>
                <div class="api">
                    
                <span id="error"></span>
                
                <input
                    type="text"
                    name="city"
                    id="city"
                    class="form-control"
                    placeholder="Ville - Pays">
                <button id="submit">cherche</button>
</div>
                <div class="show"></div>

            </aside>




        </div>
        <!-- Zone de commentaires -->
        <div class="blocCommentaire">
            <div class="zoneText">
            <input type="pseudo" name="pseudo" id="pseudo" placeholder="Pseudo">
            <textarea name="commentaire" id="commentaire" cols="30" rows="10" placeholder="Veuillez écrire votre commentaire ici"></textarea>
        </div>
        <div class="showCommentaire">
<div class="contenuCom">
    <p class="com">Ecrit par : Pseudo</p>
    <p class="com">Daté du : 19/03/2019</p>
    <p class="com">Commentaire : </p>
    <p class="com">Trop trop bien ! Je voyage !</p>
</div>
<div class="contenuCom">
    <p class="com">Ecrit par : Pseudo2</p>
    <p class="com">Daté du : 17/03/2019</p>
    <p class="com">Commentaire : </p>
    <p class="com">Trop trop bien ! Je voyage ! Tralalal louou lila troulouou</p>
</div>
<div class="contenuCom">
    <p class="com">Ecrit par : Pseudo3</p>
    <p class="com">Daté du : 11/03/2019</p>
    <p class="com">Commentaire : </p>
    <p class="com">Trop trop bien ! Je voyage ! AAhhhh grrrrhhh bouh</p>
</div>
<div class="contenuCom">
    <p class="com">Ecrit par : Pseudo</p>
    <p class="com">Daté du : 19/03/2019</p>
    <p class="com">Commentaire : </p>
    <p class="com">Trop trop bien ! Je voyage ! Il était un fois un tit oiseau qui mangeait du pain !</p>
</div>
        </div>
    </div>

        <footer>
            <p>
                &copy;2020 Monblog -
                <a href="#">Tous droits réservés -
                </a>
            </p>
            <p>
                <a href="#">Site Map</a>
            </p>
            <div class="soc-icons">
                <span>Me suivre:</span>
                <a href="#"><img src="public/images/icon-1.jpg" alt="icon"></a>
                <a href="#"><img src="public/images/icon-2.jpg" alt="icon"></a>
                
            </div>
        </footer>
<script src="public/js/active.js"></script>
        <script>menuAct(0); </script>
        <script src="public/js/creds.js"></script>
        <script src="public/js/meteo.js"></script>

    </body>
</html>