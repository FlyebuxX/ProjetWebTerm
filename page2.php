<?php
    $title = "Projet - Salle n°2";
    $css = 'css/pages2.css';

    require 'assets/fix_nb.php';

    $db = new PDO('mysql:host=mysql-valentin-eberhardt.alwaysdata.net;dbname=valentin-eberhardt_dbcinema;charset=utf8', '224794', "Xoneye@4");

    require 'components/header.php';
?>

<body>
    
    <div id="container">
        <?php
            $current = "<li><a href=\"index.php\">01. ACCUEIL</a></li>
            <li><a href=\"page1.php\" class=\"selected\">02. PROJET</a></li>
            <li><a href=\"app.php\">03. APPLICATION</a></li>
            <li><a href=\"contact.php\">04. CONTACT</a></li>";
            require 'components/navbar.php'; 
        ?>
        <h1 class="form-title">Requêtes de la fiche n° 2</h1>

        <nav class="nav-queries">
            <ul>
                <li><a href="#query1">Requête n°1</a></li>
                <li><a href="#query2">Requête n°2</a></li>
                <li><a href="#query3">Requête n°3</a></li>
                <li><a href="#query4">Requête n°4</a></li>
                <li><a href="#query5">Requête n°5</a></li>
            </ul>
        </nav>

        <div class="forms">
            <div class="form" id="query1">
                <div class="left-part">
                    <form action="page2.php#query1" method="get" oninput="result.value=parseInt(nb21.value)">
                    <label for="nb21">Afficher plus de résultats</label>
                        <input type="range" id="nb_resultat" name="nb21" min="0" max="1" value="1">
                        <output name="result">1</output>
                        <input type="submit" value="Afficher">
                    </form>
                    <div class="code">
                        <label for="">Afficher la requête SQL</label>
                        <input type="checkbox" name="checkbox" id="check21" onclick="is_checked(21)">
                        <div id="code-show21">
                            <code><span class="sql-word">SELECT DISITINCT</span> count(Réalisateur)<br><span class="sql-word">FROM</span> realisateurs<br><span class="sql-word">LIMIT</span> ' . $_GET['nb21']</code>
                        </div>
                    </div>
                </div>
                <div class="right-part">
                    <?php require 'queries/form2/query1.php'; ?>
                </div>
            </div>


            <div class="form" id="query2">
                <div class="left-part">
                    <form action="page2.php#query2" method="get" oninput="result.value=parseInt(nb22.value)">
                    <label for="nb22">Afficher plus de résultats</label>
                        <input type="range" id="nb_resultat" name="nb22" min="0" max="16" value="10">
                        <output name="result">10</output>
                        <input type="submit" value="Afficher">
                    </form>
                    <div class="code">
                        <label for="">Afficher la requête SQL</label>
                        <input type="checkbox" name="checkbox" id="check22" onclick="is_checked(22)">
                        <div id="code-show22">
                            <code><span class="sql-word">SELECT DISTINCT</span> Titre_Original<br><span class="sql-word">FROM</span> films<br><span class="sql-word">WHERE</span> Langue_Originale = "ja" <span class="sql-word">AND</span> Durée != ""<br><span class="sql-word">ORDER BY</span> Durée <span class="sql-word">ASC</span><br><span class="sql-word">LIMIT</span> ' . $_GET['nb1']</code>
                        </div>
                    </div>
                </div>
                <div class="right-part">
                    <?php require 'queries/form2/query2.php'; ?>
                </div>
            </div>


            <div class="form" id="query3">
                <div class="left-part">
                    <form action="page2.php#query3" method="get" oninput="result.value=parseInt(nb23.value)">
                    <label for="nb23">Afficher plus de résultats</label>
                        <input type="range" id="nb_resultat" name="nb23" min="0" max="25" value="10">
                        <output name="result">10</output>
                        <input type="submit" value="Afficher">
                    </form>
                    <div class="code">
                        <label for="">Afficher la requête SQL</label>
                        <input type="checkbox" name="checkbox" id="check23" onclick="is_checked(23)">
                        <div id="code-show23">
                            <code><span class="sql-word">SELECT DISTINCT</span> Titre_Original<br><span class="sql-word">FROM films</span><br><span class="sql-word">ORDER BY</span> Année_Production <span class="sql-word">ASC</span><br><span class="sql-word">LIMIT</span> ' . $_GET['nb23']</code>
                        </div>
                    </div>
                </div>
                <div class="right-part">
                    <?php require 'queries/form2/query3.php'; ?>
                </div>
            </div>


            <div class="form" id="query4">
                <div class="left-part">
                    <form action="page2.php#query4" method="get" oninput="result.value=parseInt(nb24.value)">
                    <label for="nb24">Afficher plus de résultats</label>
                        <input type="range" id="nb_resultat" name="nb24" min="0" max="1" value="1">
                        <output name="result">1</output>
                        <input type="submit" value="Afficher">
                    </form>
                    <div class="code">
                        <label for="">Afficher la requête SQL</label>
                        <input type="checkbox" name="checkbox" id="check24" onclick="is_checked(24)">
                        <div id="code-show24">
                            <code><span class="sql-word">SELECT</span> avg(CAST(Revenus_Générés <span class="sql-word">AS</span> INT))<br><span class="sql-word">FROM</span> films<br><span class="sql-word">WHERE</span> Genres in ("Thriller") <span class="sql-word">LIMIT</span> ' . $_GET['nb24']</code>
                        </div>
                    </div>
                </div>
                <div class="right-part">
                    <?php require 'queries/form2/query4.php'; ?>
                </div>
            </div>

            <div class="form" id="query5">
                <div class="left-part">
                    <form action="page2.php#query5" method="get" oninput="result.value=parseInt(nb25.value)">
                    <label for="nb25">Afficher plus de résultats</label>
                        <input type="range" id="nb_resultat" name="nb25" min="0" max="24" value="10">
                        <output name="result">10</output>
                        <input type="submit" value="Afficher">
                    </form>
                    <div class="code">
                        <label for="">Afficher la requête SQL</label>
                        <input type="checkbox" name="checkbox" id="check25" onclick="is_checked(25)">
                        <div id="code-show25">
                            <code><span class="sql-word">SELECT</span> Titre_Original<br><span class="sql-word">FROM</span> films<br><span class="sql-word">WHERE</span> Genres = "Horror"<br><span class="sql-word">AND</span> CAST(Revenus_Générés <span class="sql-word">AS</span> INT) > (<span class="sql-word">SELECT</span> avg(CAST(Revenus_Générés <span class="sql-word">AS</span> INT)) <span class="sql-word">FROM</span> films)<br><span class="sql-word">LIMIT</span> ' . $_GET['nb25']</code>
                        </div>
                    </div>
                </div>
                <div class="right-part">
                    <?php require 'queries/form2/query5.php'; ?>
                </div>
            </div>
        </div>


        <?php require 'assets/nav-forms.php' ; ?>
    </div>
<hr>
<?php require 'components/footer.php'; ?>
</body>
