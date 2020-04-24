<?php require "app/views/frontEnd/templates/head.php"; ?>
<?php require "app/views/frontEnd/templates/header.php"; ?>

<div class="container">
    <section class="main">
        <article class="bloc-intro">
            <div class="intro">
                <h1>Bienvenue !</h1>
                <p>Salutation visiteurs et visiteuses ! Et bienvenue ( oui je me répéte et alors
                    ?) sur mon humble blog ! Et oui, je vous invite à partager avec moi ce voyage
                    que j'ai fait il y a plus d'un an maintenant!<br>
                    Dieu que c'est passé vite ! Et encore aujourd'hui, lorsque je rereregarde ces
                    photos j'ai beaucoup de mal à réaliser que j'y suis vraiment allée !
                </p>

            </div>
                <!-- slider -->
            <div class="slider">
                <ul id="slider-list">
                    <li>
                        <img src="app/public/images/slider1/slide1.1.JPG"></li>
                    <li>
                        <img src="app/public/images/slider1/slide1.2.JPG"></li>
                    <li>
                        <img src="app/public/images/slider1/slide1.3.JPG"></li>
                    <li>
                        <img src="app/public/images/slider1/slide1.4.JPG"></li>
                    <li>
                        <img src="app/public/images/slider1/slide1.5.JPG"></li>
                </ul>
            </div>

        </article>
        <article class="bloc-intro">
        <!-- slider -->
            <div class="slider slider2">
                <ul id="slider-list">
                    <li>
                        <img src="app/public/images/slider2/slide2.1.JPG"></li>
                    <li>
                        <img src="app/public/images/slider2/slide2.2.JPG"></li>
                    <li>
                        <img src="app/public/images/slider2/slide2.3.JPG"></li>
                    <li>
                        <img src="app/public/images/slider2/slide2.4.JPG"></li>
                    <li>
                        <img src="app/public/images/slider2/slide2.5.JPG"></li>
                </ul>
            </div>

            <div class="intro">
                <h2>T'es partis où ?</h2>
                    <p>
                        Bande de petits curieux va ! Comme ma tendre moitié barbue et moi-même sommes
                        partis de l'autre côté du globe pour qu'il puisse réaliser un de ses rêves de
                        gamin: visiter l'Australie, nous avons décidé de faire la nouvelle-Zélande à la
                        suite !<br>
                        Deux semaines dans l'un deux semaines dans l'autre ! Donc, comme vous êtes super
                        fort en math, un mois entier ! Toute une aventure quoi !<br>
                        Alors oui, c'étais fatiguant, oui son chez-soi nous paraît loin, oui ils ne
                        parlent pas un mot Français et pour se faire comprendre quand soi-même on parle
                        un anglais lycéen ce n'est pas facile !<br>
                        Mais il ne faut surtout pas s'arrêter à ces barrieres ! Sinon, on ne fait jamais
                        rien !<br>
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
                <button id="submit">Chercher</button>
                </div>
                <div class="show"></div>
        </div>
    </aside>

</div>

<?php require "app/views/frontEnd/templates/footer.php"; ?>
<script>menuAct(0); </script>