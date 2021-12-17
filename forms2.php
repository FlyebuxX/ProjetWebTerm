<?php
    $title = "Projet - Fiche 2";

    require 'components/header.php';
    require 'assets/fix_nb.php';

    $db = new PDO('mysql:host=mysql-valentin-eberhardt.alwaysdata.net;dbname=valentin-eberhardt_dbcinema;charset=utf8', '224794', "Xoneye@4");
?>

<body>
<div id="container">
    <?php require 'components/navbar.php'; ?>
    <h1 class="form-title">Requêtes de la fiche n° 2</h1>

    <nav class="nav-queries">
        <ol>
            <li><a href="#query1">Requête n°1</a></li>
            <li><a href="#query2">Requête n°2</a></li>
            <li><a href="#query3">Requête n°3</a></li>
            <li><a href="#query4">Requête n°4</a></li>
            <li><a href="#query5">Requête n°5</a></li>
        </ol>
    </nav>

    <div class="forms">
        <div class="form" id="query1">
            <div class="left-part">
                <form action="forms.php" method="get" oninput="result.value=parseInt(nb21.value)">
                    <label for="nb11">Nombre de résultats</label>
                    <input type="range" id="nb_resultat" name="nb21" min="0" max="1" value="1">
                    <output name="result">1</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check21" onclick="is_checked(21)">
                    <div id="code-show21">
                        <p><code>SELECT DISITINCT count(Réalisateur)<br>FROM realisateurs<br>LIMIT ' . $_GET['nb21']</code></p>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form2/query1.php'; ?>
            </div>
        </div>


        <div class="form" id="query2">
            <div class="left-part">
                <form action="forms.php" method="get" oninput="result.value=parseInt(nb22.value)">
                    <label for="nb22">Nombre de résultats</label>
                    <input type="range" id="nb_resultat" name="nb22" min="0" max="16" value="10">
                    <output name="result">10</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check22" onclick="is_checked(22)">
                    <div id="code-show22">
                        <p><code>SELECT DISTINCT Titre_Original<br>FROM films<br>WHERE Langue_Originale = "ja" AND Durée != ""<br>ORDER BY Durée ASC<br>LIMIT ' . $_GET['nb1']</code></p>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form2/query2.php'; ?>
            </div>
        </div>


        <div class="form" id="query3">
            <div class="left-part">
                <form action="forms.php" method="get" oninput="result.value=parseInt(nb13.value)">
                    <label for="nb23">Nombre de résultats</label>
                    <input type="range" id="nb_resultat" name="nb23" min="0" max="25" value="10">
                    <output name="result">10</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check23" onclick="is_checked(23)">
                    <div id="code-show23">
                        <p><code>SELECT DISTINCT Titre_Original<br>FROM films<br>ORDER BY Année_Production ASC<br>LIMIT ' . $_GET['nb23']</code></p>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form2/query3.php'; ?>
            </div>
        </div>


        <div class="form" id="query4">
            <div class="left-part">
                <form action="forms.php" method="get" oninput="result.value=parseInt(nb14.value)">
                    <label for="nb14">Nombre de résultats</label>
                    <input type="range" id="nb_resultat" name="nb24" min="0" max="1" value="1">
                    <output name="result">1</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check24" onclick="is_checked(24)">
                    <div id="code-show24">
                        <p><code>SELECT avg(CAST(Revenus_Générés AS INT))<br>FROM films<br>WHERE Genres in ("Thriller") LIMIT ' . $_GET['nb24']</code></p>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form2/query4.php'; ?>
            </div>
        </div>

        <div class="form" id="query5">
            <div class="left-part">
                <form action="forms.php" method="get" oninput="result.value=parseInt(nb25.value)">
                    <label for="nb25">Nombre de résultats</label>
                    <input type="range" id="nb_resultat" name="nb25" min="0" max="24" value="10">
                    <output name="result">10</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check25" onclick="is_checked(25)">
                    <div id="code-show25">
                        <p><code></code></p>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form2/query5.php'; ?>
            </div>
        </div>

    </div>

    <script src="assets/ON_OFF.js"></script>
    <?php require 'assets/nav-forms.php' ; ?>

</div>

<?php require 'components/footer.php'; ?>

</body>