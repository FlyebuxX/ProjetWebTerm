<?php
    $title = "Projet - Salle n°3";
    $css = "css/pages3.css";
    $current_page = "page3.php";
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
    <h1 class="form-title">Requêtes de la fiche n° 3</h1>

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
                <form action="page3.php#query1" method="get" oninput="result.value=parseInt(nb31.value)">
                    <label for="nb31">Afficher plus de résultats</label>
                    <input type="range" id="nb_resultat" name="nb31" min="0" max="1" value="1">
                    <output name="result">1</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check31" onclick="is_checked(31)">
                    <div id="code-show31">
                        <code><span class="sql-word">SELECT </span>Réalisateur<br><span class="sql-word">FROM</span> realisateurs<br><span class="sql-word">WHERE </span>Id_Films = (<span class="sql-word">SELECT </span>Id_Films<span class="sql-word"><br>FROM</span> films  <span class="sql-word">WHERE</span> Revenus_Générés = (<span class="sql-word">SELECT</span> max(Revenus_Générés) <span class="sql-word">FROM</span> films))<br><span class="sql-word">LIMIT</span> $_GET['nb31'])</code>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form4/query1.php'; ?>
            </div>
        </div>


        <div class="form" id="query2">
            <div class="left-part">
                <form action="page3.php#query2" method="get" oninput="result.value=parseInt(nb32.value)">
                    <label for="nb32">Afficher plus de résultats</label>
                    <input type="range" id="nb_resultat" name="nb32" min="0" max="51" value="10">
                    <output name="result">10</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check32" onclick="is_checked(32)">
                    <div id="code-show32">
                        <code><span class="sql-word">SELECT</span> Titre_Original<br><span class="sql-word">FROM </span>films, distributions<br><span class="sql-word">WHERE</span> films.Id_Films = distributions.Id_Films<br><span class="sql-word">AND</span> distributions.Distribution = "Bruce Willis"<br><span class="sql-word">LIMIT</span> $_GET['nb32']</code>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form3/query2.php'; ?>
            </div>
        </div>


        <div class="form" id="query3">
            <div class="left-part">
                <form action="page3.php#query3" method="get" oninput="result.value=parseInt(nb33.value)">
                    <label for="nb33">Afficher plus de résultats</label>
                    <input type="range" id="nb_resultat" name="nb33" min="0" max="4" value="4">
                    <output name="result">4</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check33" onclick="is_checked(33)">
                    <div id="code-show33">
                        <code><span class="sql-word">SELECT</span> Titre_Original<br><span class="sql-word">FROM</span> films, realisateurs<br><span class="sql-word">WHERE</span> films.Id_Films = realisateurs.Id_Films<br><span class="sql-word">AND</span> Réalisateur = "Luc Besson"<br><span class="sql-word">AND</span> films.Durée > "120"<br><span class="sql-word">LIMIT</span> $_GET['nb33']</code>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form3/query3.php'; ?>
            </div>
        </div>


        <div class="form" id="query4">
            <div class="left-part">
                <form action="page3.php#query4" method="get" oninput="result.value=parseInt(nb34.value)">
                    <label for="nb14">Afficher plus de résultats</label>
                    <input type="range" id="nb_resultat" name="nb34" min="0" max="2" value="2">
                    <output name="result">2</output>
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check34" onclick="is_checked(34)">
                    <div id="code-show34">
                        <code><span class="sql-word">SELECT</span> Titre_Original, Genres<br><span class="sql-word">FROM</span> films, distributions<br><span class="sql-word">WHERE</span> films.Id_Films = distributions.Id_Films<br><span class="sql-word">AND</span> distributions.Distribution = "Cameron Diaz"<br><span class="sql-word">AND</span> films.Genres = "Comedy" <span class="sql-word"><br>AND</span> films.Année_Production > (<span class="sql-word">SELECT</span> Année_Production <span class="sql-word">FROM</span> films <span class="sql-word">WHERE</span> Titre_Original = "Shrek")<br><span class="sql-word">LIMIT</span> $_GET['nb34']</code>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form3/query4.php'; ?>
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