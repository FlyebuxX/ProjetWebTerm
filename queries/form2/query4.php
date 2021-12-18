<?php
    echo "<table>";
    echo "<th>Revenu moyen des films de genre Thriller</th>";
    
    $query24 = $db->query('SELECT avg(CAST(Revenus_Générés AS INT)) as revenu_moyen FROM films WHERE Genres = "Thriller" LIMIT ' . $_GET['nb24']);

    while ($donnees = $query24-> fetch()) {
        echo '<tr><td>' . $donnees['revenu_moyen'] . '</td><tr>';
    }
    $query24 -> closeCursor();

    echo "</table>";