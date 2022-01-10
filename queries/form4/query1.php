<?php
    $actors = $db->query('SELECT DISTINCT distributions.Distribution FROM distributions');
    $directors = $db->query('SELECT DISTINCT Réalisateur FROM realisateurs');
    $actors_list = [];
    $directors_list = [];
    while($donnees = $actors->fetch()) {
        array_push($actors_list, $donnees['Distribution']);
    };
    while ($donnees = $directors->fetch()) {
        array_push($directors_list, $donnees['Réalisateur']);
    };

    if (isset($_GET['choice_value']) && in_array(strval($_GET['choice_value']), $actors_list) && $_GET['choice'] === 'Saisir un acteur') {

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

    } else if (isset($_GET['choice_value']) && in_array(strval($_GET['choice_value']), $directors_list) && $_GET['choice'] === 'Saisir un réalisateur') {
        echo "<table>";
        echo "<th>Films réalisés par" . " " . $_GET['choice_value']. " " . "</th>";

        $query42 = $db->prepare('SELECT * from films, realisateurs WHERE films.Id_Films = realisateurs.Id_Films AND realisateurs.Réalisateur = ?');
        $query42->execute(array(strval($_GET['choice_value'])));

        while($donnees = $query42->fetch()) {
            echo '<tr><td>' . $donnees['Titre_Original'] . '</td><tr>';
        }
        $query42 -> closeCursor();
        echo "</table>";
    } 