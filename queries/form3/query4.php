<?php
    echo "<table>";
    echo "<th>Films de catégorie Comedy où joue l'actrice Cameron Diaz et tournés après le film Shrek</th>";
    $query34 = $db->query('SELECT Titre_Original, Genres FROM films, distributions WHERE films.Id_Films = distributions.Id_Films AND distributions.Distribution = "Cameron Diaz" AND films.Genres = "Comedy" AND films.Année_Production > (SELECT Année_Production FROM films WHERE Titre_Original = "Shrek") LIMIT ' . $_GET['nb34']);
    while ($donnees = $query34 -> fetch()) {
        echo '<tr><td>' . $donnees['Titre_Original'] . '</td><tr>';
    }
    $query34 -> closeCursor();

    echo "</table>";