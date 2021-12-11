<?php
    // $db = new PDO('mysql:host=mysql-valentin-eberhardt.alwaysdata.net;dbname=valentin-eberhardt_dbcinema;charset=utf8', 'valentin-eberhardt', "Xoneye@4");
    $db = new PDO('mysql:host=localhost;dbname=dbcinema;charset=utf8', 'root', "Teqozi+1");
    $get_query = $db->query('SELECT * FROM films');

    while ($donnees = $get_query -> fetch()) {
        echo $donnees['Id_Films'] . '<br>';
    }

    $get_query -> closeCursor()
?>