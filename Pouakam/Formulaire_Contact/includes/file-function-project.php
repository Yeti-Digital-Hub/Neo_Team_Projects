<?php
    /*Ce module est utiliser pour vérifier si les données du formulaire,soumises sont conformes avant de leurs traitements; 
    elle va reposer sur l'utilisation de 04 fonctions indépendantes.*/
    /**
     * Fontion pour vérifier si les variables champs existe et si elle ne sont pas vide
     *
     * @param string $donnee
     * @return bool true 
     */
    function verify($donnee){
        if(isset($donnee)){
            if(!empty($donnee)){
                return $donnee;
            }
        }
    }
    /**
     * Fontion pour la filtrage du nom
     *
     * @param string $donnee
     * @return bool true si le nom à été bien filtrer
     */
    function securityName($donnee){
        if(verify($donnee)){
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
            echo '<strong><i class="bi bi-exclamation-triangle-fill text-danger"></i> Le champ du nom est vide!</strong>';
        }        
    }
    /** 
     * Fonction de vérification du format de l'adresse email.
     * @param string $donnee 
     * @return bool true si l'email à été filtrer
    */
    function securityEmail($donnee){
        if(verify($donnee)){
            if(function_exists('securityName')){
                $donnee = securityName($donnee);
                // vérification du format de l'adresse email...
                if(preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $donnee)){
                    return $donnee;
                }else{
                    echo '<strong><i class="bi bi-exclamation-triangle-fill text-danger"></i> l\'email entrez est invalide (example@gmail.com)!</strong>';
                }
            }
        }else{
            echo '<strong><i class="bi bi-exclamation-triangle-fill text-danger"></i> Le champ d\'email est vide!</strong>';
        }  
    }
    /**
     * Fonction de vérification du format du numéro de téléphone.
     *
     * @param string $donnee
     * @return bool true si le phone à été filtrer
     */
    function securityPhone($donnee){
        if(verify($donnee)){
            if(function_exists('securityName')){
                $donnee = securityName($donnee);
                // Vérification du format du numéro de téléphone...
                if(preg_match("/^\+?[0-9]{1,3}[-. ]?[0-9]{1,14}$/", $donnee)){
                    return $donnee;
                }else{
                    echo '<strong><i class="bi bi-exclamation-triangle-fill text-danger"></i> Le numéro de téléphone entrez est invalide (eg.+237)!</strong>';
                }
            }
        }else{
            echo '<strong><i class="bi bi-exclamation-triangle-fill text-danger"></i> Le champ du numéro de téléphone est vide!</strong>';
        }
    }
    /**
     * Fonction de sécurité pour le message.
     *
     * @param string $donnee 
     * @return bool true si le message à été filtrer, false sinon
     */
    // fonction de sécurité pour le message...
    function securityMessage($donnee){
        if(verify($donnee)){
            // Protection contre les attaques XSS(injection de html et javascript)
            $donnee = htmlspecialchars($donnee);
            // suppression des antislashes...
            $donnee = stripslashes($donnee);
            return $donnee;
        }else{
            echo '<strong><i class="bi bi-exclamation-triangle-fill text-danger"></i> le champs du message est vide!</strong>';
        }
    }
    /**
     * Fonction qui permet de stocker et recuperer les donner du fichier JSON.
     *
     * @param string $name
     * @param string $surname
     * @param string $phone
     * @param string $email
     * @param string $message
     * @param string $file Chemin du fichier JSON
     * @return bool true si l'ajout a réussi, false sinon
     */
    function saveUserToJson($name, $phone, $email, $message, $file='data/dataBase.json'){
        if(file_exists($file)){
            $tableauData = json_decode(file_get_contents($file), true); // récupération des données du fichier JSON...
        }else{
            $tableauData = []; // initialisation du tableau vide...
        }
        $dataEnterUser = array($name, $phone, $email, $message); // nouvelle données à ajouter dans le tableau...
        $tableauData[] = $dataEnterUser; // ajouter la donner en fin de tableau...
        return file_put_contents($file, json_encode($tableauData, JSON_PRETTY_PRINT)); // ajout de la nouvelle données dans le fichier json...
    }
