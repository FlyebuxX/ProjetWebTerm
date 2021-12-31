<?php
    $title = "Applications - Salle n°4";
    $css = "css/app.css";    
    require 'components/header.php';
?>

<body>
    <div class="container">
        <?php
            $current = "<li><a href=\"index.php\">01. ACCUEIL</a></li>
            <li><a href=\"page1.php\">02. PROJET</a></li>
            <li><a href=\"app.php\" class=\"selected\">03. APPLICATION</a></li>
            <li><a href=\"contact.php\">04. CONTACT</a></li>";
            require 'components/navbar.php'; 
        ?>
    </div>
</body>