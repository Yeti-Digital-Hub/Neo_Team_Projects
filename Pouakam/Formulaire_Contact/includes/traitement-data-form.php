<?php
    /**
     * Ce fichier est espace de liaision des différents modules du systèmes étant au nombre de 04 
     */

    // Inclusion du module 1 du sytème...
    require_once ('file-function-project.php');

    // Script d'intéraction entre les modules...
    if(isset($_POST['send'])){
        if(security($_POST['name']) && securityPhone($_POST['phone']) && $email = securityEmail($_POST['email']) && $message = securityMessage($_POST['message'])){
            $name = security($_POST['name']);
            $phone = securityPhone($_POST['phone']);
            $email = securityEmail($_POST['email']);
            $message = securityMessage($_POST['message']);
            saveUserToJson($name, $phone, $email, $message);
        }
    }
?>