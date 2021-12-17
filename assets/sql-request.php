<?php

    function request(string $hostname, $data) {

        // $db = new PDO('mysql:host=mysql-valentin-eberhardt.alwaysdata.net;dbname=valentin-eberhardt_dbcinema;charset=utf8', 'valentin-eberhardt', "Xoneye@4");
        $db = new PDO('mysql:host=' . $hostname . ';dbname=dbcinema;charset=utf8', 'root', "Teqozi+1");
        $get_query = $db->query('SELECT Titre_Original FROM films WHERE lower(Titre_Original) like "the%"');

        while ($donnees = $get_query -> fetch()) {
            echo $donnees['Titre_Original'] . '<br>';
        }

        $get_query -> closeCursor();
    }
