<?php
    echo "<table>";
    echo "<th>Titres et Genres des films dont la durée n'a pas été renseignée</th>";

    $query14 = $db->query('SELECT Titre_Original, Genres FROM films WHERE Durée = "" LIMIT ' . $_GET['nb4']);
    while ($donnees = $query14 -> fetch()) {
        echo '<tr><td>' . $donnees['Titre_Original'] . $donnees['Genres'] . '</td><tr>';
    }
    $query14 -> closeCursor();

    echo "</table>";