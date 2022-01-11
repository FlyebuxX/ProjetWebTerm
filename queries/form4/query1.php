<?php
    $actors = $db->query('SELECT DISTINCT lower(distributions.Distribution) as Distribution FROM distributions');
    $directors = $db->query('SELECT DISTINCT lower(Réalisateur) as Réalisateur FROM realisateurs');
    $films = $db->query('SELECT DISTINCT lower(films.Titre_Original) as Titre_Original FROM films');

    $actors_list = [];
    $directors_list = [];
    $films_list = [];

    while($donnees = $actors->fetch()) {
        array_push($actors_list, $donnees['Distribution']);
    };
    while ($donnees = $directors->fetch()) {
        array_push($directors_list, $donnees['Réalisateur']);
    };
    while ($donnees = $films->fetch()) {
        array_push($films_list, $donnees['Titre_Original']);
    };

    if (isset($_GET['choice_value']) && in_array(strtolower($_GET['choice_value']), $actors_list) && $_GET['choice'] === 'Saisir un acteur') {

        echo "<table>";
        echo "<th>Nombre de films tournés par" . " " . $_GET['choice_value'] . " ". "</th>";

        $query41 = $db->prepare('SELECT count(Titre_Original) as nb_films FROM films, distributions WHERE films.Id_Films = distributions.Id_Films AND distributions.Distribution = ?');
        $query41->execute(array(strval($_GET['choice_value'])));

        while($donnees = $query41->fetch()) {
            echo '<tr><td>' . $donnees['nb_films'] . '</td><tr>';
        }
        $query41 -> closeCursor();

        echo "<th>Titre, année et réalisateur du plus long film tourné par " . $_GET['choice_value'] . " </th>";

        $query41 = $db->prepare('SELECT DISTINCT films.Titre_Original, films.Année_Production, realisateurs.Réalisateur FROM films, realisateurs, distributions WHERE films.Id_Films = distributions.Id_Films AND distributions.Distribution = ? AND realisateurs.Id_Films = films.Id_Films ORDER BY Durée DESC LIMIT 1;');
        $query41->execute(array(strval($_GET['choice_value'])));

        while($donnees = $query41->fetch()) {
            echo '<tr><td>' . $donnees['Titre_Original'] . ", " . $donnees['Année_Production'] . ", " . $donnees['Réalisateur'] . '</td><tr>';
        }
        $query41 -> closeCursor();
        echo "</table>";

    } else if (isset($_GET['choice_value']) && in_array(strtolower($_GET['choice_value']), $directors_list) && $_GET['choice'] === 'Saisir un réalisateur') {
        echo "<table>";
        echo "<th>Films réalisés par" . " " . $_GET['choice_value'] . "</th>";

        $query42 = $db->prepare('SELECT * FROM films, realisateurs WHERE films.Id_Films = realisateurs.Id_Films AND realisateurs.Réalisateur = ?');
        $query42->execute(array(strval($_GET['choice_value'])));

        while($donnees = $query42->fetch()) {
            echo '<tr><td>' . $donnees['Titre_Original'] . '</td><tr>';
        }
        $query42 -> closeCursor();
        echo "</table>";

    }  else if (isset($_GET['choice_value']) && in_array(strtolower($_GET['choice_value']), $films_list) && $_GET['choice'] === 'Saisir un film') {
        echo "<table>";
        echo "<th>Information sur le film" . " " . $_GET['choice_value'] . "<td>Année</td><td>Durée (min)</td><td>Langue</td><td>Genres</td><td>Revenus générés</td></th>";

        $query43 = $db->prepare('SELECT * FROM films WHERE Titre_Original = ?');
        $query43->execute(array(strval($_GET['choice_value'])));

        while($donnees = $query43->fetch()) {
            echo '<tr><td>' . $donnees['Titre_Original'] . '</td><td>' . $donnees['Année_Production'] . '</td><td>' . $donnees['Durée'] . '</td><td>' . $donnees['Langue_Originale'] . '</td><td>' . $donnees['Genres'] . '</td><td>' . $donnees['Revenus_Générés'] . '</td><tr>';
        }
        $query43 -> closeCursor();
        echo "</table>";


        echo "<table>";
        echo "<th>Réalisateur du film" . " " . $_GET['choice_value'] . "</th>";

        $query43 = $db->prepare('SELECT Réalisateur FROM realisateurs WHERE Id_Films = (SELECT Id_Films FROM films WHERE Titre_Original = ?)');
        $query43->execute(array(strval($_GET['choice_value'])));

        while($donnees = $query43->fetch()) {
            echo '<tr><td>' . $donnees['Réalisateur'] . '</td></tr>';
        }
        $query43 -> closeCursor();
        echo "</table>";


        echo "<table>";
        echo "<th>Acteurs du film" . " " . $_GET['choice_value'] . "</th>";

        $query43 = $db->prepare('SELECT Distribution FROM distributions WHERE Id_Films = (SELECT Id_Films FROM films WHERE Titre_Original = ?)');
        $query43->execute(array(strval($_GET['choice_value'])));

        while($donnees = $query43->fetch()) {
            echo '<tr><td>' . $donnees['Distribution'] . '</td><tr>';
        }
        $query43 -> closeCursor();
        echo "</table>";

    } else if (isset($_GET['choice_value']) && in_array(strtolower($_GET['choice_value']), $actors_list) && $_GET['choice'] === 'Chercher un acteur') {
        echo "<table>";
        echo "<th>Films dans lesquels a joué" . " " . $_GET['choice_value'] . "</th>";

        $query44 = $db->prepare('SELECT films.Titre_Original FROM films, distributions WHERE films.Id_Films = distributions.Id_Films AND distributions.Distribution = ?');
        $query44->execute(array(strval($_GET['choice_value'])));

        while($donnees = $query44->fetch()) {
            echo '<tr><td>' . $donnees['Titre_Original'] . '</td><tr>';
        }
        $query44 -> closeCursor();
        echo "</table>";
    } else if (isset($_GET['choice_value'])) {
        echo '<div class="error">Erreur. Vérifier :<br>1- Avez-vous saisi une option ?<br>2- L\'acteur, le film ou le réalisateur saisi est mal ortographié<br>3- La donnée demandée n\'appartient pas à la base</div>';
    }


    // afficher acteurs + réalisateur du film choisi
    // reste acteurs