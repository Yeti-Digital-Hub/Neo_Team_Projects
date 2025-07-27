<?php
    require_once('../Debug.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire Contact</title>
        <!-- importation de la biliothèque bootstrap-icons...-->
        <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/Folder_style/style-index.css?v=1.1">
    </head>
    <body>
        <header class="header">
            <div class="dashboard-title"><i class="bi bi-facebook"></i></div>
            <div class="admin-info">
                <div class="avatar">U</div>
                <div class="admin-name">Utilisateur</div>
            </div>
        </header>
        <!-- Logique du système...-->
        <?php
            require_once('includes/traitement-data-form.php');
        ?>
        <!-- formulaire de contact...-->
        <form action="#" method="post">
            <h1>Contact Us</h1>
            <!-- ligne séparation de couleur violet...-->
            <div class="row-purple"></div>
            <!-- contenaire pour le corps du fomulaire qui est diviser verticalement en deux parties(Partie gauche et Partie droite)...-->
            <div class="body-form">
                <!-- Partie gauche du formulaire étant diviser en 04 groupes, chaque groupe est contenu par son label, l'icone et l'espace du champs...-->
                <div class="body-left-form">
                    <div class="group">
                        <label for="label-name">Name</label>
                        <input type="text" name="name" id="label-name" placeholder="Enter your name" autocomplete="off">
                        <i class="bi bi-person"></i>
                    </div>
                    <div class="group">
                        <label for="label-email">Email</label>
                        <input type="text" name="email" id="label-email" placeholder="Enter your email @gmail.com" autocomplete="off">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="group">
                        <label for="label-phone">Phone</label>
                        <input type="tel" name="phone" id="label-phone" placeholder="Enter your phone (eg.+237)" autocomplete="off">
                        <i class="bi bi-phone"></i>
                    </div>
                </div>
                <!-- Partie droite de formulaire contenant un seule groupe qui contient son label, l'icone et l'espace du champs...-->
                <div class="body-right-form">
                    <div class="group">
                        <label for="label-message">Message</label>
                        <textarea name="message" id="label-message" placeholder="Enter your message..." autocomplete="off"></textarea>
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
            <div class="footer-form">
                <button type="submit" name="send">Send a message</button>
            </div>
        </form>
    </body>
</html>