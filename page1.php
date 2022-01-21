<?php
    $title = "Projet - Salle n°1";
    $css = "css/pages1.css";
    require 'assets/fix_nb.php';

    $db = new PDO('mysql:host=mysql-valentin-eberhardt.alwaysdata.net;dbname=valentin-eberhardt_dbcinema;charset=utf8', '224794', "");
    
    require 'components/header.php';
?>

<body>
    <?php
        $current = "<li><a href=\"index.php\">01. ACCUEIL</a></li>
        <li><a href=\"page1.php\" class=\"selected\">02. PROJET</a></li>
        <li><a href=\"app.php\">03. APPLICATION</a></li>
        <li><a href=\"contact.php\">04. CONTACT</a></li>";
        require 'components/navbar.php'; 
    ?>
    <div id="container">

        <h1 class="form-title">Requêtes de la fiche n° 1</h1>

        <nav class="nav-queries">
            <ul>
                <li><a href="#query1">Requête n°1</a></li>
                <li><a href="#query2">Requête n°2</a></li>
                <li><a href="#query3">Requête n°3</a></li>
                <li><a href="#query4">Requête n°4</a></li>
            </ul>
        </nav>

        <div class="forms">
            <div class="form" id="query1">
                <div class="left-part">
                    <form action="page1.php#query1" method="get" oninput="result.value=parseInt(nb11.value)">
                        <label for="nb11">Afficher plus de résultats</label>
                        <input type="range" id="nb_resultat" name="nb11" min="0" max="976" value="10">
                        <output name="result">10</output>
                        <input type="submit" value="Afficher">
                    </form>
                    <div class="code">
                        <label for="">Afficher la requête SQL</label>
                        <input type="checkbox" name="checkbox" id="check11" onclick="is_checked(11)">
                        <div id="code-show11">
                            <code><span class="sql-word">SELECT</span> Titre_Original<br><span class="sql-word">FROM</span> films<br><span class="sql-word">WHERE</span> lower(Titre_Original) like "the%"<br><span class="sql-word">LIMIT</span> $_GET['nb11']</code>
                        </div>
                    </div>
                </div>
                <div class="right-part">
                    <?php require 'queries/form1/query1.php'; ?>
                </div>
            </div>


            <div class="form" id="query2">
                <div class="left-part">
                    <form action="page1.php#query2" method="get" oninput="result.value=parseInt(nb12.value)">
                        <label for="nb12">Afficher plus de résultats</label>
                        <input type="range" id="nb_resultat" name="nb12" min="0" max="104" value="10">
                        <output name="result">10</output>
                        <input type="submit" value="Afficher">
                    </form>
                    <div class="code">
                        <label for="">Afficher la requête SQL</label>
                        <input type="checkbox" name="checkbox" id="check12" onclick="is_checked(12)">
                        <div id="code-show12">
                            <code><span class="sql-word">SELECT DISTINCT</span> Distribution<br><span class="sql-word">FROM</span> distributions<br><span class="sql-word">WHERE</span> lower(Distribution) like "bruce%"<br><span class="sql-word">LIMIT</span> $_GET['nb12']</code>
                        </div>
                    </div>
                </div>
                <div class="right-part">
                    <?php require 'queries/form1/query2.php'; ?>
                </div>
            </div>


            <div class="form" id="query3">
                <div class="left-part">
                    <form action="page1.php#query3" method="get" oninput="result.value=parseInt(nb13.value)">
                        <label for="nb13">Afficher plus de résultats</label>
                        <input type="range" id="nb_resultat" name="nb13" min="0" max="2" value="2">
                        <output name="result">2</output>
                        <input type="submit" value="Afficher">
                    </form>
                    <div class="code">
                        <label for="">Afficher la requête SQL</label>
                        <input type="checkbox" name="checkbox" id="check13" onclick="is_checked(13)">
                        <div id="code-show13">
                            <code><span class="sql-word">SELECT</span> Titre_Original, Langue_Originale<br><span class="sql-word">FROM</span> films<br><span class="sql-word">WHERE</span> Genres in ("Action")<br>and Langue_Originale != "en"<br><span class="sql-word">LIMIT</span> $_GET['nb13']</code>
                        </div>
                    </div>
                </div>
                <div class="right-part">
                    <?php require 'queries/form1/query3.php'; ?>
                </div>
            </div>


            <div class="form" id="query4">
                <div class="left-part">
                    <form action="page1.php#query4" method="get" oninput="result.value=parseInt(nb14.value)">
                        <label for="nb14">Afficher plus de résultats</label>
                        <input type="range" id="nb_resultat" name="nb14" min="0" max="24" value="10">
                        <output name="result">10</output>
                        <input type="submit" value="Afficher">
                    </form>
                    <div class="code">
                        <label for="">Afficher la requête SQL</label>
                        <input type="checkbox" name="checkbox" id="check14" onclick="is_checked(14)">
                        <div id="code-show14">
                            <code><span class="sql-word">SELECT</span> Titre_Original, Genres<br><span class="sql-word">FROM</span> films<br><span class="sql-word">WHERE</span> Durée = ""<br><span class="sql-word">LIMIT</span> $_GET['nb14']</code>
                        </div>
                    </div>
                </div>
                <div class="right-part">
                    <?php require 'queries/form1/query4.php'; ?>
                </div>
            </div>
        </div>

        <p class="end">The End</p>
        <?php require 'components/top_page.php'; ?>

        <?php require 'components/nav-forms.php' ; ?>
    </div>
<hr>
<?php require 'components/footer.php'; ?>

</body>
