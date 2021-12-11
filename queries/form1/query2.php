<?php
    echo "<table>";
    echo "<th>Noms des acteurs de la base dont le prénom commence par \"Bruce\"</th>";

    $query12 = $db->query('SELECT DISTINCT Distribution FROM distributions WHERE lower(Distribution) like "bruce%" LIMIT 10');
    while ($donnees = $query12 -> fetch()) {
        echo '<tr><td>' . $donnees['Distribution'] . '</td><tr><br>';
    }
    $query12 -> closeCursor();

    echo "</table>";