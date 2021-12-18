<?php
    echo "<table>";
    echo "<th>Nom de films de la base dont le nom commence par \"The\"</th>";

    $query11 = $db->query('SELECT Titre_Original FROM films WHERE lower(Titre_Original) like "the%" LIMIT ' . $_GET['nb11']);

    while ($donnees = $query11 -> fetch()) {
        echo '<tr><td>' . $donnees['Titre_Original'] . '</td><tr>';
    }
    $query11 -> closeCursor();

    echo "</table>";