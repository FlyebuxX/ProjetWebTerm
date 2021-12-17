<?php
    if (isset($_POST['mail']) && isset($_POST['gs-btn-mail'])) {
        echo "here";
        $message = "Bienvenue dans notre communauté !";
        mail($_POST['mail'], 'Confirmation d\'inscription', $message);
    }