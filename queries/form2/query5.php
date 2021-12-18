<?php
    echo "<table>";
    echo "<th>Titres des films d'horreur dont le revenu est supérieur au revenu moyen des films de la base</th>";
    $query25 = $db->query('SELECT Titre_Original FROM films WHERE Genres = "Horror" AND CAST(Revenus_Générés AS INT) > (SELECT avg(CAST(Revenus_Générés AS INT)) FROM films) LIMIT ' . $_GET['nb25']);

    while ($donnees = $query25 -> fetch()) {
        echo '<tr><td>' . $donnees['Titre_Original'] . '</td><tr>';
    }
    $query25 -> closeCursor();

    echo "</table>";