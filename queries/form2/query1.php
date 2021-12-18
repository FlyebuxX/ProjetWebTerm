<?php
    echo "<table>";
    echo "<th>Nombre des réalisateurs différents de la base de données</th>";
    $query21 = $db->query('SELECT DISTINCT count(Réalisateur) FROM realisateurs LIMIT ' . $_GET['nb21']);

    while ($donnees = $query21 -> fetch()) {
        echo '<tr><td>' . $donnees['count(Réalisateur)'] . '</td><tr>';
    }
    $query21 -> closeCursor();

    echo "</table>";