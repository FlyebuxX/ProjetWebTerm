<?php

        $actors = $db->query('SELECT DISTINCT distributions.Distribution FROM distributions');
        $actors_list = [];
        while($donnees = $actors->fetch()) {
            array_push($actors_list, $donnees['Distribution']);
        }
        if (in_array(strval($_GET['actor_name']), $actors_list)) {

            echo "<table>";
            echo "<th>Nombre de films tournés par l'acteur</th>";

            $query41 = $db->prepare('SELECT count(Titre_Original) as nb_films FROM films, distributions WHERE films.Id_Films = distributions.Id_Films AND distributions.Distribution = ?');
            $query41->execute(array(strval($_GET['actor_name'])));

            while($donnees = $query41->fetch()) {
                echo '<tr><td>' . $donnees['nb_films'] . '</td><tr>';
            }
            $query41 -> closeCursor();

            echo "<th>Titre, année et réalisateur du plus long film tourné par " . $_GET['actor_name'] . " </th>";

            $query41 = $db->prepare('SELECT DISTINCT films.Titre_Original, films.Année_Production, realisateurs.Réalisateur FROM films, realisateurs, distributions WHERE films.Id_Films = distributions.Id_Films AND distributions.Distribution = ? AND realisateurs.Id_Films = films.Id_Films ORDER BY Durée DESC LIMIT 1;');
            $query41->execute(array(strval($_GET['actor_name'])));

            while($donnees = $query41->fetch()) {
                echo '<tr><td>' . $donnees['Titre_Original'] . ", " . $donnees['Année_Production'] . ", " . $donnees['Réalisateur'] . '</td><tr>';
            }
            $query41 -> closeCursor();
            echo "</table>";
        } else if ($_GET['actor_name'] === '') {
        } else {
            echo 'Merci de saisir un acteur valide | Acteur non trouvé dans la base.';
        }