<?php
    session_start();

    require_once('includes/function_forget_password.php'); // en parallèle avec les fonctions au token
    require_once('includes/function_login.php');

    if(!isset($_SESSION['email_forget_valide']))
    {
        header('Location: forget_password.php');
        exit;
    }

    // envoi du token dans la boite email

    $tokenMail = save_token();
    $url = "http://localhost/Neo_Team_Projects/Pouakam/System_Authentificator/reset_password.php?token=" . urlencode($tokenMail[1]); // lien du token cliquable dans le mail

    $email = $_SESSION['email_forget_valide'];
    $subject = "Réinitialisation de votre mot de passe";

    $message = "Bonjour,\n\n";
    $message .= "Pour réinitialiser votre mot de passe, cliquez sur ce lien :\n";
    $message .= $url . "\n\n";
    $message .= "Ce lien expire dans 15 minutes.\n\n";
    $message .= "Si vous n'avez pas demandé cette réinitialisation, ignorez cet e-mail.";

    $headers = "From: no-reply@ton-site.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consult token email</title>
        <link rel="stylesheet" href="assets/icons/css/all.min.css">
        <link rel="stylesheet" href="files_style/style-token-email.css">
    </head>
    <body>
        <header class="header">
            <div class="card-name-site">
                <div class="avatar">G</div>
                <div class="name-site">Gitlab</div>
            </div>
            <div class="logo-site">
                <i class="fa-brands fa-gitlab"></i>
            </div>
        </header>
        <main>
            <?php
                if(mail($email, $subject, $message, $headers))
                {
                    echo '
                        <div class="card-message-token">
                            <p class="message-token">Veuillez consulter votre boîte email un code de réinitialisation de password à été envoyer <i class="fa-solid fa-user-check"></i></p>
                        </div>
                    ';
                }
            ?>
        </main>
    </body>
</html>