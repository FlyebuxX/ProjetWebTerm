<?php
    $title = "Application";
    require 'components/header.php';

    if (!isset($_GET['nb1'])) {
        $_GET['nb1'] = 10;
    }

    if (!isset($_GET['nb2'])) {
        $_GET['nb2'] = 10;
    }

    if (!isset($_GET['nb3'])) {
        $_GET['nb3'] = 10;
    }

    if (!isset($_GET['nb4'])) {
        $_GET['nb4'] = 10;
    }

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
            <form action="forms.php" method="get">
                <div class="left-part">
                    <label for="nb1">Nombre de résultats</label>
                    <input type="number" id="nb_resultat" name="nb1" min="0" max="976" value="10">
                </div>
                <div class="right-part">
                    <input type="submit" value="Afficher">
                </div>
            </form>
            <?php require 'queries/form1/query1.php'; ?>
        </div>

        <div class="form" id="fiche2">
            <form action="forms.php" method="get">
                <div class="left-part">
                    <label for="nb2">Nombre de résultats</label>
                    <input type="number" id="nb_resultat" name="nb2" value="10">
                </div>
                <div class="right-part">
                    <input type="submit" value="Afficher">
                </div>
            </form>
            <?php require 'queries/form1/query2.php'?>
        </div>

        <div class="form" id="fiche3">
            <form action="forms.php" method="get">
                <div class="left-part">
                    <label for="nb3">Nombre de résultats</label>
                    <input type="number" id="nb_resultat" name="nb3" value="10">
                </div>
                <div class="right-part">
                    <input type="submit" value="Afficher">
                </div>
            </form>
            <?php require 'queries/form1/query3.php'?>
        </div>

        <div class="form" id="fiche4">
            <form action="forms.php" method="get">
                <div class="left-part">
                    <label for="nb4">Nombre de résultats</label>
                    <input type="number" id="nb_resultat" name="nb4" value="10">
                </div>
                <div class="right-part">
                    <input type="submit" value="Afficher">
                </div>
            </form>
            <?php require 'queries/form1/query4.php'?>
        </div>
    </div>

</div>

<?php require 'components/footer.php'; ?>

</body>