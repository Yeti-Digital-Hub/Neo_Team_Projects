<?php
    /**
     *  elle permet de verifier si un champs est remplit
     * @param string $donnee represente le un champ
     * @return string retourne ici la donnée entrée
     */
    function verify($donnee)
    {
        if(isset($donnee))
        {
            if(!empty($donnee))
            {
                return $donnee;
            }
        }
    }
    /**
     * elle permet de securiser l'email entrer
     * @param string $donnee
     * @return string elle retourne l'email sécuriser ou une variable d'erreur
     */
    function security_email($donnee)
    {
        if(verify($donnee))
        {
            $donnee = htmlspecialchars($donnee);
            $donnee = trim($donnee);
            $donnee = stripslashes($donnee);
            if(filter_var($donnee, FILTER_VALIDATE_EMAIL))
            {
                return $donnee;
            }
        }
    }
    /**
     * elle permet de securiser l'email entrer
     * @param string $donnee
     * @return string elle retourne le mot de passe sécuriser ou une variable d'erreur
     */
    function security_password($donnee)
    {
        if(verify($donnee))
        {
            $donnee = htmlspecialchars($donnee);
            $donnee = trim($donnee);
            $donnee = stripslashes($donnee);
            return $donnee;
        }
    }
    /**
     * elle permet de récuperer les données de la base de donnée (fichier json)
     * @param string $file le chemin d'accèes de la bd
     * @return array retouner les données du fichier json au format tableau
     */
    function recup_data($file)
    {
        if(file_exists($file))
        {
            return json_decode(file_get_contents($file), true);
        }
    }
    /** 
     * elle permet de verirer l'authenticité des indentifiants
     * @param array $dataUsers pour les donner de la bd
     * @return bool retoune true si les indentifiants sont valides et false sinon
    */
    function auth_login($emailUser, $passwordUsers)
    {
        if(recup_data('data/data_base.json'))
        {
            $dataUsers = recup_data('data/data_base.json');
            foreach($dataUsers as $keys => $users)
            {
                if($emailUser == $users[0])
                {
                    if(password_verify($passwordUsers, $users[2]))
                    {
                        return [true, $keys];
                    }
                    else
                    {
                        return [false];
                    }
                }
            }
            return [false]; // personne n'a été trouver
        }
    }
