<!-- IMPORT HEADER -->
<?php
    require 'components/header.php';
?>


<body>
    
    <?php require 'components/navbar.php'; ?>

    <div id="container">
        <div class="top-page">
            <div class="banner">
                <img src="img/main-banner.svg" alt="main-banner" class="banner-img">
                <!-- <img src="img/second-banner.jpg" alt="seconary-banner"> -->
            </div>
            <div class="banner-titles">
                <h1 class="fst-title"></h1>
                <h2 class="snd-title"></h2>
            </div>
            <button class="gs-btn"><a href="app.php" class="gs-btn-link">Je teste l'application</a></button>
        </div>

        <div class="bottom_page">
            <div class="showcase-content">
                <section class="showcase-article">
                    <img src="" alt="">
                    <p class="l-text">Consultez les statistiques de vos séances en toute simplicité</p>
                </section>

                <section class="showcase-article">
                    <img src="" alt="">
                    <p class="l-text">Profitez d'une interface entièrement sécurisée</p>
                </section>

                <section class="showcase-article">
                    <img src="" alt="">
                    <p class="l-text">Visualisez vos progrès et planifiez vos entraînements</p>
                </section>

                <div class="gsub">
                    <h1 class="gsub-title">Inscrivez-vous maintenant</h1>
                    <p class="gsub-p">
                        Cela prend seulement quelques minutes pour créer un compte et commencer une nouvelle aventure.<br>Si vous avez des questions, n'hésitez pas à contacter notre équipe support.
                    </p>

                    <div class="mails">
                        <div class="mails-input">
                            <input type="email" placeholder="email@example.com" class="email-input">
                        </div>

                        <div class="mails-btn">
                            <button class="gsub-btn">S'inscire gratuitement</button>
                            <p><a href="connexion.html">Déjà inscrit ?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>


<!-- IMPORT  -->
<?php require 'components/footer.php'; ?>



