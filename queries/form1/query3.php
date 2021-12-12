<?php
    echo "<table>";
    echo "<th>Titres et langues des films dont le genre est Action et qui n'ont pas été tournés dans la langue anglaise</th>";

    $query13 = $db->query('SELECT Titre_Original, Langue_Originale FROM films WHERE Genres in ("Action") and Langue_Originale != "en" LIMIT ' . $_GET['nb3']);
    while ($donnees = $query13 -> fetch()) {
        echo '<tr><td>' . $donnees['Titre_Original'] . $donnees['Langue_Originale'] . '</td><tr>';
    }
    $query13 -> closeCursor();

    echo "</table>";