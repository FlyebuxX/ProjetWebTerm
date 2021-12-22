<?php
    $title = "Contact";
    $css = "css/styles.css";
    require 'components/header.php';
    require 'components/navbar.php';

?>

<script src="assets/send_message.js" type="text/javascript"></script>
<body>
    <div id="container">
        <div class="contact-form">
            <h1 class="title-form">Nous Contacter</h1>
            <div class="border"></div>
            <h2 class="snd-form-title">Nos équipes vous répondrons dans les plus brefs délais.</h2>    
    
            <form method="POST" class="contact-fields" action="contact.php">
                <label for="">NOM *</label>
                <input type="text" class="contact-form-text" name="nom" required>

                <label for="">PRENOM *</label>
                <input type="text" class="contact-form-text" name="prenom" required>

                <label for="">EMAIL *</label>
                <input type="email" class="contact-form-text" name="mail" required>

                <label for="">OBJET DU MAIL *</label>
                <input type="text" class="contact-form-text" name="object" required>

                <label for="">MESSAGE *</label>
                <textarea class="contact-form-textarea" name="message" required></textarea>
                <input type="submit" name="submit-btn" class="contact-form-btn" value="Envoyer">
                <input type="reset" class="contact-form-btn" value="Annuler tout">
            </form>
        </div>
        <div class="map-form">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2611.9809172424575!2d6.1656223159287835!3d49.10600297931254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794dc0edaa0abc9%3A0xbca89964c66c2ba!2sLyc%C3%A9e%20Louis%20Vincent!5e0!3m2!1sfr!2sfr!4v1639848223709!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="map"></iframe>
            <p>Vous pouvez également venir à notre rencontre physiquement au Lycée Louis Vincent de Metz, Rue de Verdun.</p>
        </div>

        <?php
            if (!empty($_POST['nom']) && !empty($_POST['prenom'])  && !empty($_POST['mail'])  && !empty($_POST['message']) && !empty($_POST['object'])) {
                $to = 'valentin.eberhardt57@gmail.com';
                $subject = $_POST['object'];
                $message = $_POST['message'];
    
        
                $headers = array(
                    'From' => $_POST['nom'] . $_POST['prenom'] . $_POST['mail'],
                    'Reply-To' => $_POST['mail'],
                );

                mail($to, $subject, $message, $headers);
                echo "<script src=\"assets/confirmation.js\"></script>";
            }
        ?>
    <script src="assets/change_bg2.js"></script>
    </div>

</body>


<script src="assets/ON_OFF.js"></script>

<?php require 'components/footer.php'; ?>