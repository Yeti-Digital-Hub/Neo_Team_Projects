<?php
    /**
     * Ce fichier est espace de liaision des différents modules du systèmes étant au nombre de 04 
     */

    // Inclusion du module 1 du sytème...
    require_once ("security-form.php");

    // Script d'intéraction entre les modules...
    if(isset($_POST['send'])){
        $name = security($_POST['name']);
        $surname = security($_POST['surname']);
        $phone = securityPhone($_POST['phone']);
        $email = securityEmail($_POST['email']);
        $message = securityMessage($_POST['message']);
    }
?>