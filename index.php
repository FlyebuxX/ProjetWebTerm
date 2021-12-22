<!-- IMPORT HEADER -->
<?php
    $title = "Accueil";
    $css = 'css/index.css';
    require 'components/header.php';
?>

<body>
    <?php require 'components/navbar.php'; ?>
    <div id="container">
        <div id="banner">
            <div class="brand">
                <h2>LES STATISTIQUES DE</h2>
                <h1>VOS FILMS PRÉFÉRÉS</h1>
                <p>CinéStats est une plateforme qui vous permet<br>de consulter les statistiques de quelques<br>106 000 distributions, 4700 réalisateurs & films.<br>Et cela en toute simplicité !</p>
            </div>

            <div class="launch-btn">
                <button type="submit"><a href="app.php">Lancer<br>l'application</a></button>
            </div>
        </div>
    </div>
<?php require 'components/footer.php' ;?>
</body>
