<?php
    echo "<table>";
    echo "<th>Nombre des réalisateurs différents de la base de données</th>";
    $query21 = $db->query('SELECT count(DISTINCT Réalisateur) FROM realisateurs; LIMIT ' . $_GET['nb21']);

    while ($donnees = $query21 -> fetch()) {
        echo '<tr><td>' . $donnees['count(DISTINCT Réalisateur)'] . '</td><tr>';
    }
    $query21 -> closeCursor();

    echo "</table>";