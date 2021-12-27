<?php
    $title = "CinéStats - Mentions légales";
    $css = "css/mentions.css";
    
    require 'components/header.php';
?>

<body>
    <div id="container">
        <?php
            $current = "<li><a href=\"index.php\">01. ACCUEIL</a></li>
            <li><a href=\"page1.php\">02. PROJET</a></li>
            <li><a href=\"app.php\">03. APPLICATION</a></li>
            <li><a href=\"contact.php\">04. CONTACT</a></li>";
            require 'components/navbar.php'; 
        ?>

        <article>
            <h1>Mentions légales</h1>
            <h2 class="snd-title">Mentions légales liées à l'hébergement de ce site</h2>
            <p class="icons"><i class="fas fa-user"></i> CinéStats, publié le <i class="far fa-calendar-alt"></i><time datetime="2021-12-27"> 27/12/2021</time></p>
            <p class="intro">Ici sont décrites les mentions légales nécessaires à la publication d'un site Web.</p>

            <h1 class="host">Relatif à l'hébergement</h1>

            <h2>1 - Coordonnées de l'hébergeur</h2>
            <h3>Nom : AlwaysData</h3>
            <h3>Site web : <a href="https://www.alwaysdata.com/fr/">alwaysdata.com</a></h3>
            
            <h2>2 - Coordonnées du développeur</h2>
            <h3>Nom : Valentin EBERHARDT</h3>
            <h3>Contact :</h3>
            <ul>
                <li>par mail : valentin.eberhardt57@gmail.com</li>
                <li>au lycée Louis Vincent de Metz</li>
            </ul>

            <h2>3 - Sources</h2>
            <div class="sources">
                <p>Le code nécessaier à la création de ce site Web est disponible sur <a href="https://github.com/" class="link">le GitHub du développeur</a>.</p>
                <p>Les images de ce site proviennent de <a href="https://unsplash.com/" class="link">Unsplash</a> et <a href="https://www.pexels.com/fr-fr/" class="link">Pexels</a>.</p>
                <p>Les icones et polices de caractères sont fournies par <a href="https://fontawesome.com/" class="link">Font Awesome</a> et <a href="https://fonts.google.com/" class="link">Google Fonts</a></p>
            </div>
        </article>
    </div>
</body>

<?php require 'components/footer.php'; ?>