<?php
    session_start();

    // Désactiver tout type de cache
    header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    // Vérifie si l'utilisateur est connecté
    if (!isset($_SESSION['email_login'])) {
        header('Location: index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <!-- importation de la biliothèque font-awersome...-->
        <link rel="stylesheet" href="assets/icons/css/all.min.css">
        <style>
            body {
                background-color: #f0f0f0;
                font-family: Arial, sans-serif;
                color: #333;
                margin: 0;
                padding: 0;
            }
            h1 {
                text-align: center;
                margin-top: 20px;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                color: #9720FF;
            }
            .contenair {
                width: 100%;
                height: 60vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .contenair i {
                font-size: 100px;
                color: #9720FF;
            }
            .contenair p {
                font-size: 20px;
                color: #333;
                margin: 20px 0;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-weight: 600;
            }
            .contenair a {
                text-decoration: none;
                color: #fff;
                background-color:#9720FF;
                padding: 15px 25px;
                border-radius: 5px;
                font-weight: bold;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
            a:hover {
                background-color: rgb(167, 72, 250);
            }
        </style>
    </head>
    <body>
        <h1>Welcome dashboard</h1>
        <div class="contenair">
            <i class="fa-solid fa-user-circle"></i>
            <p><?= $_SESSION['email'] ?></p>
            <a href="logout.php">Se déconnecter</a>
        </div>
    </body>
    <script>
        // Empêche l'utilisateur de revenir en arrière avec le cache du navigateur
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

        window.onunload = function() {};
    </script>
</html>