<?php
    echo "<table>";
    echo "<th>Réalisateur de la base ayant rapporté le plus d'argent sur un film</th>";
    $query31 = $db->query('SELECT Réalisateur FROM realisateurs WHERE Id_Films = (SELECT Id_Films FROM films  WHERE Revenus_Générés = (SELECT max(Revenus_Générés) FROM films)) LIMIT ' . $_GET['nb31']);

    while ($donnees = $query31 -> fetch()) {
        echo '<tr><td>' . $donnees['Réalisateur'] . '</td><tr>';
    }
    $query31 -> closeCursor();

    echo "</table>";