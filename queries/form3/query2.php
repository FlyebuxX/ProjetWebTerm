<?php
    echo "<table>";
    echo "<th>Films de la base ayant Bruce Willis comme acteur</th>";
    $query32 = $db->query('SELECT Titre_Original FROM films, distributions WHERE films.Id_Films = distributions.Id_Films AND distributions.Distribution = "Bruce Willis" LIMIT ' . $_GET['nb32']);
    while ($donnees = $query32 -> fetch()) {
        echo '<tr><td>' . $donnees['Titre_Original'] . '</td><tr>';
    }
    $query32 -> closeCursor();

    echo "</table>";