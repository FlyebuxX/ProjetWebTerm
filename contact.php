<?php require 'components/header.php' ; ?>
<body>
    <input type="checkbox" name="checkbox" id="check" onclick="validate()">
    <div id="sec">
        <p><code>SELECT Titre_Original FROM films WHERE lower(Titre_Original) like "the%" LIMIT ' . $_GET['nb1']</code></p>
    </div>
</body>

<script src="assets/ON_OFF.js"></script>