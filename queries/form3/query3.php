<?php
    echo "<table>";
    echo "<th>Films de la base ayant Luc Besson comme réalisateur et dont la durée est supérieure à 2h</th>";
    $query33 = $db->query('SELECT Titre_Original FROM films, realisateurs WHERE films.Id_Films = realisateurs.Id_Films AND Réalisateur = "Luc Besson" AND films.Durée > "120" LIMIT ' . $_GET['nb33']);
    while ($donnees = $query33 -> fetch()) {
        echo '<tr><td>' . $donnees['Titre_Original'] . '</td><tr>';
    }
    $query33 -> closeCursor();

    echo "</table>";