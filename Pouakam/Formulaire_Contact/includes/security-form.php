<?php
    /*Ce module est utiliser pour vérifier si les données du formulaire,soumises sont conformes avant de leurs traitements; 
    elle va reposer sur l'utilisation de 04 fonctions indépendantes.*/

    function security($donnee){
        if(isset($donnee) && !empty($donnee)){
            // Contre les attaques XSS(injections HTML et JavaScript)....
            $donnee = htmlspecialchars($donnee);
            // Suppression des espaces en début et fin d'une chaine...
            $donnee = trim($donnee);
            // Suppression des tags HTML dans une chaine...
            $donnee = strip_tags($donnee);
            // Suppression des antislashes dans une chaine...
            $donnee = stripslashes($donnee);
            return $donnee;
        }else{
            echo '<strong><i class="bi bi-exclamation-triangle-fill text-danger"></i> One or more fields are empty. Please fill them in!</strong>';
        }
    }
    // fonction de vérification du format du numéro de téléphone...
    function securityPhone($donnee){
        if(function_exists('security')){
            $donnee = security($donnee);
            // Vérification du format du numéro de téléphone...
            if(preg_match("/^\+?[0-9]{1,3}[-. ]?[0-9]{1,14}$/", $donnee)){
                return $donnee;
            }else{
                echo '<strong><i class="bi bi-exclamation-triangle-fill text-danger"></i> The phone number entered is not valid (eg.+237)!</strong>';
            }
        }
    }
    // fonction de vérification du format de l'adresse email...
    function securityEmail($donnee){
        if(function_exists('security')){
            $donnee = security($donnee);
            // vérification du format de l'adresse email...
            if(preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $donnee)){
                return $donnee;
            }else{
                echo '<strong><i class="bi bi-exclamation-triangle-fill text-danger"></i> The email address entered is not valid (example@gmail.com)!</strong>';
            }
        }
    }
    // fonction de sécurité pour le message...
    function securityMessage($donnee){
        if(isset($donnee) && !empty($donnee)){
            // Protection contre les attaques XSS(injection de html et javascript)
            $donnee = htmlspecialchars($donnee);
            // suppression des antislashes...
            $donnee = stripslashes($donnee);
        }else{
            echo '<strong><i class="bi bi-exclamation-triangle-fill text-danger"></i> Please enter a message!</strong>';
        }
    }
?>