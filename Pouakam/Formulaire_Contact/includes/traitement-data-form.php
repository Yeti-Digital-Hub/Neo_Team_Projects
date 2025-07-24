<?php
    /**
     * Ce fichier est espace de liaision des différents modules du systèmes étant au nombre de 04 
     */

    // Inclusion du module 1 du sytème...
    require_once ('file-function-project.php');

    // Script d'intéraction entre les modules...
    if(isset($_POST['send'])){
        if(verify($_POST['name']) || verify($_POST['email']) || verify($_POST['phone']) || verify($_POST['message'])){
            $name = securityName($_POST['name']);
            $email = securityEmail($_POST['email']);
            $phone = securityPhone($_POST['phone']);
            $message = securityMessage($_POST['message']);
        }else{
            echo '<strong><i class="bi bi-exclamation-triangle-fill text-danger"></i> Tous les champs sont vides</strong>';
        }
        /*ici si toutes le fonctions de sécurité existe alors on insère dans le fichier json */
        if(isset($name) && isset($email) && isset($phone) && isset($message)){
            saveUserToJson($name, $phone, $email, $message);
            echo '<strong style="background-color :rgb(168, 235, 205)"><i class="bi bi-check-circle-fill text-success"></i> vos données ont été envoyer avec sucess</strong>';
        }
    }
?>