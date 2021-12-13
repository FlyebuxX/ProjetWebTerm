<?php
    $title = "Projet";
    require 'components/header.php';

    require 'assets/fix_nb.php';

    $db = new PDO('mysql:host=mysql-valentin-eberhardt.alwaysdata.net;dbname=valentin-eberhardt_dbcinema;charset=utf8', '224794', "Xoneye@4");
    
?>

<body>
<div id="container">
    <?php require 'components/navbar.php'; ?>
    <h1 class="form-title">Requêtes de la fiche n° 1</h1>

    <nav class="nav-forms">
        <ol>
            <li><a href="#fiche1">Requête n°1</a></li>
            <li><a href="#fiche2">Requête n°2</a></li>
            <li><a href="#fiche3">Requête n°3</a></li>
            <li><a href="#fiche4">Requête n°4</a></li>
        </ol>
    </nav>

    <div class="forms">
        <div class="form" id="fiche1">
            <div class="left-part">
                <form action="forms.php" method="get" oninput="result.value=parseInt(nb1.value)">
                    <label for="nb1">Nombre de résultats</label>
                    <input type="range" id="nb_resultat" name="nb1" min="0" max="976" value="10">
                    <output name="result">10</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check1" onclick="is_checked(1)">
                    <div id="code-show1">
                        <p><code>SELECT Titre_Original<br>FROM films<br>WHERE lower(Titre_Original) like "the%"<br>LIMIT ' . $_GET['nb1']</code></p>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form1/query1.php'; ?>
            </div>
        </div>


        <div class="form" id="fiche2">
            <div class="left-part">
                <form action="forms.php" method="get" oninput="result.value=parseInt(nb2.value)">
                    <label for="nb2">Nombre de résultats</label>
                    <input type="range" id="nb_resultat" name="nb2" min="0" max="104" value="10">
                    <output name="result">10</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check2" onclick="is_checked(2)">
                    <div id="code-show2">
                        <p><code>SELECT DISTINCT Distribution<br>FROM distributions<br>WHERE lower(Distribution) like "bruce%"<br>LIMIT ' . $_GET['nb2']</code></p>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form1/query2.php'; ?>
            </div>
        </div>


        <div class="form" id="fiche3">
            <div class="left-part">
                <form action="forms.php" method="get" oninput="result.value=parseInt(nb3.value)">
                    <label for="nb3">Nombre de résultats</label>
                    <input type="range" id="nb_resultat" name="nb3" min="0" max="2" value="0">
                    <output name="result">0</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check3" onclick="is_checked(3)">
                    <div id="code-show3">
                        <p><code>SELECT Titre_Original, Langue_Originale FROM films<br>WHERE Genres in ("Action")<br>and Langue_Originale != "en"<br> LIMIT ' . $_GET['nb3']</code></p>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form1/query3.php'; ?>
            </div>
        </div>


        <div class="form" id="fiche4">
            <div class="left-part">
                <form action="forms.php" method="get" oninput="result.value=parseInt(nb4.value)">
                    <label for="nb4">Nombre de résultats</label>
                    <input type="range" id="nb_resultat" name="nb4" min="0" max="24" value="10">
                    <output name="result">10</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check4" onclick="is_checked(4)">
                    <div id="code-show4">
                        <p><code>SELECT Titre_Original, Genres<br>FROM films<br>WHERE Durée = ""<br>LIMIT ' . $_GET['nb4']</code></p>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form1/query4.php'; ?>
            </div>
        </div>

    </div>

    <script src="assets/ON_OFF.js"></script>

</div>

<?php require 'components/footer.php'; ?>

</body>