<!-- IMPORT HEADER -->
<?php
    $title = "Accueil";
    require 'components/header.php';
?>


<body>

    <div id="container">
        <?php require 'components/navbar.php'; ?>

        <div class="fst-part">

            <div class="banner">
                <img src="img/movie_night.svg" alt="movie-night" class="banner-img">

                <div class="banner-titles">
                    <h1>Toutes les statistiques de vos films préférés</h1>
                    <h2>CinéStats est une plateforme qui vous permet de consulter les statistiques de quelques 106 000 distributions, 4700 réalisateurs & films. Et cela et toute simplicité !</h2>
                </div>
                
                <button class="gs-btn"><a href="app.php" class="gs-btn-link">Lancer à l'application</a></button>

            </div>

        </div>

        <div class="snd-part">
            <div class="showcase">
                <section class="show">
                    <img src="img/analytics.svg" alt="analytics-img">
                    <p class="showcase-p">Utilisez notre moteur de recherche comportant de nombreux critères de sélection</p>
                </section>

                <section class="show">
                    <img src="img/security.svg" alt="secutiry-img">
                    <p class="showcase-p">Profitez d'une interface sécurisée qui respecte le RGPD</p>
                </section>

                <section class="show">
                    <img src="img/search.svg" alt="search-img">
                    <p class="showcase-p">Effectuez des recherches parmi une large base de données</p>    
                </section>

                <section class="show">
                    <img src="img/tv.svg" alt="tv-img">
                    <p class="showcase-p">Vivez pleinement vos expériences filmiques</p>
                </section>
            </div>
        </div>


        <div class="thd-part">
          <h1 class="ga-title">Accéder en avant première à nos bases de données</h1>
          <p class="ga-p">
            Cela prend seulement quelques minutes pour s'inscrire gratuitement pour accéder<br>à nos bases. Si vous avez un quelconque problème, n'hésitez pas à contacter l'équipe support.
          </p>
          <div class="mails">
              <div class="left-part">
                <input type="email" type="mail" placeholder="email@exemple.com">
              </div>

            <div class="right-part">
                <button class="gs-btn-mail"><a href="inscription.php">Accéder gratuitement</a></button>
                <p><a href="connexion.html">Déjà inscrit ?</a></p>
            </div>
          </div>

        </div>


    </div>
    
    <?php
        require 'components/footer.php';
    ?>

</body>




