<?php
    $title = "Application";
    require 'components/header.php';

    $db = new PDO('mysql:host=mysql-valentin-eberhardt.alwaysdata.net;dbname=valentin-eberhardt_dbcinema;charset=utf8', '224794', "Xoneye@4");
    var_dump($_POST['nb1']);
    echo "<table>";
    echo "<th>Nom de films de la base dont le nom commence par \"The\"</th>";
    
    $query11 = $db->query('SELECT Titre_Original FROM films WHERE lower(Titre_Original) like "the%" LIMIT ' . intval($_POST['nb1']));
    // $query11 = $db->query('SELECT Titre_Original FROM films WHERE lower(Titre_Original) like "the%" LIMIT' . $_POST['nb1'] . "'");

    while ($donnees = $query11 -> fetch()) {
        echo '<tr><td>' . $donnees['Titre_Original'] . '</td><tr><br>';
    }
    $query11 -> closeCursor();

    echo "</table>";
    
?>

<body>
<div id="container">
    <?php require 'components/navbar.php'; ?>
    <h1 class="form-title">Requêtes de la fiche n° 1</h1>

    <nav class="nav-forms">
        <ol>
            <li><a href="#fiche1">Requête n°1</a></li>
            <li><a href="#fiche2">Requête n°2</a></li>
            <li><a href="#fiche3">Requête n°3</a></li>
            <li><a href="#fiche4">Requête n°4</a></li>
        </ol>
    </nav>

    <div class="forms">
        <?php
            
            // $db = new PDO('mysql:host=localhost;dbname=dbcinema;charset=utf8', 'root', "Teqozi+1");  
        ?>
        <div class="form" id="fiche1">
            <form action="forms.php" method="post">
                <label for="nb1">Nombre de résultats</label>
                <input type="range" id="nb_resultat" name="nb1" min="0" max="976" value="10">
                <input type="submit" value="Rechercher">
            </form>

        </div>
        <div class="form" id="fiche2"><?php require 'queries/form1/query2.php'?></div>
        <div class="form" id="fiche3"><?php require 'queries/form1/query3.php'?></div>
        <div class="form" id="fiche4"><?php require 'queries/form1/query4.php'?></div>
    </div>

</div>
</body>