<?php

    if ($_GET['choice'] === 'Saisir un acteur') {
        $code = '<div class="code">
        <label for="">Afficher la requête SQL</label>
        <input type="checkbox" name="checkbox" id="check41" onclick="is_checked(41)">
            <div id="code-show41">
                <code><span class="sql-word">SELECT DISTINCT</span> films.Titre_Original, films.Année_Production, realisateurs.Réalisateur<br><span class="sql-word">FROM</span> films, realisateurs, distributions<br><span class="sql-word">WHERE</span> films.Id_Films = distributions.Id_Films<br><span class="sql-word">AND</span> distributions.Distribution = ?<br><span class="sql-word">AND</span> realisateurs.Id_Films = films.Id_Films<br><span class="sql-word">ORDER BY</span> Durée <span class="sql-word">DESC</span><br><span class="sql-word">LIMIT</span> 1</code>
            </div>
        </div>';
    } else if ($_GET['choice'] === 'Saisir un réalisateur') {
        $code = '<div class="code">
        <label for="">Afficher la requête SQL</label>
        <input type="checkbox" name="checkbox" id="check42" onclick="is_checked(42)">
            <div id="code-show42">
                <code><span class="sql-word">SELECT</span> * <br><span class="sql-word">FROM</span> films, realisateurs<br><span class="sql-word">WHERE</span> films.Id_Films = realisateurs.Id_Films<br><span class="sql-word">AND</span> realisateurs.Réalisateur = ?</code>
            </div>
        </div>';
    } else if ($_GET['choice'] === 'Saisir un film') {
        $code = '<div class="code">
        <label for="">Afficher la requête SQL</label>
        <input type="checkbox" name="checkbox" id="check43" onclick="is_checked(43)">
            <div id="code-show43">
                <code><span class="sql-word">SELECT</span> * <br><span class="sql-word">FROM</span> films<br><span class="sql-word">WHERE</span> Titre_Original = ?</code><br><br>
                <code><span class="sql-word">SELECT</span> Réalisateur <br><span class="sql-word">FROM</span> realisateurs <br><span class="sql-word">WHERE</span> Id_Films = (<span class="sql-word">SELECT</span> Id_Films <span class="sql-word">FROM</span> films <span class="sql-word">WHERE</span> Titre_Original = ?)</code><br><br>
                <code><span class="sql-word">SELECT</span> Distribution <br><span class="sql-word">FROM</span> distributions <br><span class="sql-word">WHERE</span> Id_Films = (<span class="sql-word">SELECT</span> Id_Films <span class="sql-word">FROM</span> films <span class="sql-word">WHERE</span> Titre_Original = ?)</code>
            </div>
        </div>';
    } else if ($_GET['choice'] === 'Chercher un acteur') {
        
        $code = '<div class="code">
        <label for="">Afficher la requête SQL</label>
        <input type="checkbox" name="checkbox" id="check44" onclick="is_checked(44)">
            <div id="code-show44">
                <code><span class="sql-word">SELECT</span> films.Titre_Original <br><span class="sql-word">FROM</span> films, distributions <br><span class="sql-word">WHERE</span> films.Id_Films = distributions.Id_Films <br><span class="sql-word">AND</span> distributions.Distribution = ?</code>
        
            </div>
        </div>';
    }
; ?>




<?php
    $title = "Application - Salle n°4";
    $css = "css/app.css";
    $current_page = "page4.php";
    require 'assets/fix_nb.php';

    $db = new PDO('mysql:host=mysql-valentin-eberhardt.alwaysdata.net;dbname=valentin-eberhardt_dbcinema;charset=utf8', '224794', "Xoneye@4");
    
    require 'components/header.php';
?>

<body>
<div id="container">
    <?php
        $current = "<li><a href=\"index.php\">01. ACCUEIL</a></li>
        <li><a href=\"page1.php\">02. PROJET</a></li>
        <li><a href=\"app.php\" class=\"selected\">03. APPLICATION</a></li>
        <li><a href=\"contact.php\">04. CONTACT</a></li>";
        require 'components/navbar.php'; 
    ?>
    <h1 class="form-title">Fiche n°4</h1>
    <div class="forms">
        <div class="form" id="query1">
            <div id="left-part">
                <form action="app_requests.php" method="get">
                    <div class="fst">
                        <label for="">Choisissez une option</label>
                        <select name="choice" id="choice" onchange="getSelectedValue();">
                            <option value="">-- Choisir une option --</option>
                            <option value="Saisir un acteur" name="actor_name">Acteur (fiche 4)</option>
                            <option value="Saisir un réalisateur" name="director_name">Chercher un réalisateur</option>
                            <option value="Saisir un film" name="film_name">Chercher un film</option>
                            <option value="Chercher un acteur" name="actor_name_2">Chercher un acteur</option>
                        </select>

                    <script>
                        function getSelectedValue() {
                            var selectedValue = document.getElementById("choice").value;
                            document.getElementById("label_choice").innerHTML = selectedValue;
                        }
                    </script>
                    </div>

                    <div class="snd">
                        <label for="" name="label_choice" id="label_choice"></label>
                        <input type="text" name="choice_value" value="">
                    </div>

                    <div class="thd">
                        <input type="submit" value="Afficher">
                    </div>
                </form>
                    <?= $code; ?>
            </div>
            <div id="right-part">
                <?php require 'queries/form4/query1.php'; ?>
            </div>
        </div>

    </div>
    
    <?php require 'components/top_page.php'; ?>

    <?php require 'components/nav-forms.php' ; ?>
</div>

<hr>
<?php require 'components/footer.php'; ?>

</body>