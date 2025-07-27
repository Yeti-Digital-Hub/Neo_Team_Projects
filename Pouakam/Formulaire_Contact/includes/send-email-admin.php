<?php
    /**
    * Ce fichier permet l'envoi d'un mail à l'admin à chaque fois que un user soumet le formulaire.
    */
        $to = 'facebookAdmin@gmail.com'; // adresse email du destinateur.
        $suject = 'Formulaire de contact'; // sujet du mail
        $contenuMail = htmlspecialchars_decode($message); // message du mail.
        $headers = [
        'From' => $email, // adresse email de l'expéditeur.
        'Reply-to' => $email // adresse email sur lequel on doit repondre
        ];
        mail($to, $suject, $contenuMail, $headers); // fontion d'envoi de mail