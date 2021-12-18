<?php
    echo "<table>";
    echo "<th>Titres des films tournés en japonais dans l'ordre croissant de leur durée</th>";

    $query22 = $db->query('SELECT DISTINCT Titre_Original FROM films WHERE Langue_Originale = "ja" AND Durée != "" ORDER BY Durée ASC LIMIT ' . $_GET['nb22']);

    while ($donnees = $query22 -> fetch()) {
        echo '<tr><td>' . $donnees['Titre_Original'] . '</td><tr>';
    }
    $query22 -> closeCursor();

    echo "</table>";