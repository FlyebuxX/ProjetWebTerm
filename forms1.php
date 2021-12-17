<?php
    $title = "Projet - Fiche 1";

    require 'components/header.php';
    require 'assets/fix_nb.php';

    $db = new PDO('mysql:host=mysql-valentin-eberhardt.alwaysdata.net;dbname=valentin-eberhardt_dbcinema;charset=utf8', '224794', "Xoneye@4");
    
?>

<body>
<div id="container">
    <?php require 'components/navbar.php'; ?>
    <h1 class="form-title">Requêtes de la fiche n° 1</h1>

    <nav class="nav-queries">
        <ol>
            <li><a href="#query1">Requête n°1</a></li>
            <li><a href="#query2">Requête n°2</a></li>
            <li><a href="#query3">Requête n°3</a></li>
            <li><a href="#query4">Requête n°4</a></li>
        </ol>
    </nav>

    <div class="forms">
        <div class="form" id="query1">
            <div class="left-part">
                <form action="forms.php" method="get" oninput="result.value=parseInt(nb11.value)">
                    <label for="nb11">Nombre de résultats</label>
                    <input type="range" id="nb_resultat" name="nb11" min="0" max="976" value="10">
                    <output name="result">10</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check1" onclick="is_checked(11)">
                    <div id="code-show11">
                        <p><code>SELECT Titre_Original<br>FROM films<br>WHERE lower(Titre_Original) like "the%"<br>LIMIT ' . $_GET['nb11']</code></p>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form1/query1.php'; ?>
            </div>
        </div>


        <div class="form" id="query2">
            <div class="left-part">
                <form action="forms.php" method="get" oninput="result.value=parseInt(nb12.value)">
                    <label for="nb12">Nombre de résultats</label>
                    <input type="range" id="nb_resultat" name="nb12" min="0" max="104" value="10">
                    <output name="result">10</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check12" onclick="is_checked(12)">
                    <div id="code-show12">
                        <p><code>SELECT DISTINCT Distribution<br>FROM distributions<br>WHERE lower(Distribution) like "bruce%"<br>LIMIT ' . $_GET['nb12']</code></p>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form1/query2.php'; ?>
            </div>
        </div>


        <div class="form" id="query3">
            <div class="left-part">
                <form action="forms.php" method="get" oninput="result.value=parseInt(nb13.value)">
                    <label for="nb13">Nombre de résultats</label>
                    <input type="range" id="nb_resultat" name="nb13" min="0" max="2" value="0">
                    <output name="result">0</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check3" onclick="is_checked(13)">
                    <div id="code-show13">
                        <p><code>SELECT Titre_Original, Langue_Originale FROM films<br>WHERE Genres in ("Action")<br>and Langue_Originale != "en"<br> LIMIT ' . $_GET['nb13']</code></p>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form1/query3.php'; ?>
            </div>
        </div>


        <div class="form" id="query4">
            <div class="left-part">
                <form action="forms.php" method="get" oninput="result.value=parseInt(nb14.value)">
                    <label for="nb14">Nombre de résultats</label>
                    <input type="range" id="nb_resultat" name="nb14" min="0" max="24" value="10">
                    <output name="result">10</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check14" onclick="is_checked(14)">
                    <div id="code-show14">
                        <p><code>SELECT Titre_Original, Genres<br>FROM films<br>WHERE Durée = ""<br>LIMIT ' . $_GET['nb14']</code></p>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form1/query4.php'; ?>
            </div>
        </div>

    </div>

    <script src="assets/ON_OFF.js"></script>
    <?php require 'assets/nav-forms.php' ; ?>

</div>

<?php require 'components/footer.php'; ?>

</body>