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
<!-- 
    <nav class="nav-queries">
        <ul>
            <li><a href="#query1">Requête n°1</a></li>
            <li><a href="#query2">Requête n°2</a></li>
            <li><a href="#query3">Requête n°3</a></li>
            <li><a href="#query4">Requête n°4</a></li>
        </ul>
    </nav> -->


    <div class="forms">
        <div class="form" id="query1">
            <div class="left-part">
                <form action="app.php#query1" method="get">
                    <label for="actor_name">Acteur</label>
                    <input type="text" id="actor_name" name="actor_name" value="">
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check41" onclick="is_checked(41)">
                    <div id="code-show41">
                        <code></code>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form4/query1.php'; ?>
            </div>
        </div>

        <div class="form" id="query2">
            <div class="left-part">
                <form action="app.php#query2" method="get">
                    <label for="director_name">Chercher un réalisateur</label>
                    <input type="text" id="director_name" name="director_name" value="">
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check42" onclick="is_checked(42)">
                    <div id="code-show42">
                        <code></code>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form4/query2.php'; ?>
            </div>
        </div>

        <div class="form" id="query3">
            <div class="left-part">
                <form action="app.php#query3" method="get">
                    <label for="director_name">Chercher un acteur</label>
                    <input type="text" id="actor_name_2" name="actor_name_2" value="">
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check43" onclick="is_checked(43)">
                    <div id="code-show43">
                        <code></code>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form4/query3.php'; ?>
            </div>
        </div>

        <div class="form" id="query4">
            <div class="left-part">
                <form action="app.php#query4" method="get">
                    <label for="film_name">Chercher un film</label>
                    <input type="text" id="film_name" name="film_name" value="">
                    <input type="submit" value="Afficher">
                </form>
                <div class="code">
                    <label for="">Afficher la requête SQL</label>
                    <input type="checkbox" name="checkbox" id="check44" onclick="is_checked(44)">
                    <div id="code-show44">
                        <code></code>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <?php require 'queries/form4/query4.php'; ?>
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