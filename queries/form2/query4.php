<?php
    echo "<table>";
    echo "<th>Revenu moyen des films de genre Thriller</th>";
    
    $query24 = $db->query('SELECT avg(CAST(Revenus_Générés AS INT)) FROM films WHERE Genres in ("Thriller") ' . $_GET['nb24']);
    // $query11 = $db->query('SELECT Titre_Original FROM films WHERE lower(Titre_Original) like "the%" LIMIT' . $_POST['nb1'] . "'");

    while ($donnees = $query24-> fetch()) {
        echo '<tr><td>' . $donnees . '</td><tr>';
    }
    $query11 -> closeCursor();

    echo "</table>";