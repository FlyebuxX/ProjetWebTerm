<?php
    echo "<table>";
    echo "<th>Noms des films les plus anciens de la base</th>";
    
    $query23 = $db->query('SELECT DISTINCT Titre_Original FROM films ORDER BY Année_Production ASC LIMIT ' . $_GET['nb23']);

    while ($donnees = $query23 -> fetch()) {
        echo '<tr><td>' . $donnees['Titre_Original'] . '</td><tr>';
    }
    $query23 -> closeCursor();

    echo "</table>";