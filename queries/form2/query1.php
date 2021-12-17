<?php
    echo "<table>";
    echo "<th>Nombre des réalisateurs différents de la base de données</th>";
    
    $query21 = $db->query('SELECT DISITINCT count(Réalisateur) FROM realisateurs LIMIT ' . $_GET['nb21']);
    // $query11 = $db->query('SELECT Titre_Original FROM films WHERE lower(Titre_Original) like "the%" LIMIT' . $_POST['nb1'] . "'");

    while ($donnees = $query21 -> fetch()) {
        echo '<tr><td>' . $donnees['Réalisateur'] . '</td><tr>';
    }
    $query11 -> closeCursor();

    echo "</table>";