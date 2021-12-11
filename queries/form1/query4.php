<?php
    echo "<table>";
    echo "<th>Titres et Genres des films dont la durée n'a pas été renseignée</th>";

    $query14 = $db->query('SELECT Titre_Original, Genres FROM films WHERE Durée = "" LIMIT 10');
    while ($donnees = $query14 -> fetch()) {
        echo '<tr><td>' . $donnees['Titre_Original'] . $donnees['Genres'] . '</td><tr><br>';
    }
    $query14 -> closeCursor();

    echo "</table>";