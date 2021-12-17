<?php
    echo "<table>";
    echo "<th>Noms desfilms les plus anciens de la base</th>";
    
    $query23 = $db->query('SELECT DISTINCT Titre_Original FROM films ORDER BY Année_Production ASC LIMIT ' . $_GET['nb23']);
    // $query11 = $db->query('SELECT Titre_Original FROM films WHERE lower(Titre_Original) like "the%" LIMIT' . $_POST['nb1'] . "'");

    while ($donnees = $query23 -> fetch()) {
        echo '<tr><td>' . $donnees['Titre_Original'] . '</td><tr>';
    }
    $query11 -> closeCursor();

    echo "</table>";