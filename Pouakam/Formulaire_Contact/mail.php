<?php
    $to = "me@example.com";
    $subject = "Test Mail";
    $message = "Ceci est un test";
    $headers = "From: test@localhost";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail envoyé avec succès.";
    } else {
        echo "Échec de l'envoi.";
    }


?>
