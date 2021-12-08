<?php
    $db = new PDO('mysql:host=mysql-valentin-eberhardt.alwaysdata.net;dbname=valentin-eberhardt_dbcinema;charset=utf8', 'valentin-eberhardt', "Xoneye@4");
    $get_query = $db->query('SELECT * FROM films');

    while ($donnees = $get_query -> fetch()) {
        echo $donnees['Id_Films'] . '<br>';
    }

    $get_query -> closeCursor()
    ?>