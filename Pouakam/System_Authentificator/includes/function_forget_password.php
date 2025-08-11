<?php
    /**
     * ce fichier contient toute les fonctions necessaires pour le forget password
     * il sera inclut dans le fichier auth_main.php
     */
    

    /**
     * elle permet de verifier si l'email entrez est correct
     * @param string $email email entrez pour le forget password
     */
    function auth_forget($email)
    {
        if(recup_data('data/data_base.json'))
        {
            $dataUsersForget = recup_data('data/data_base.json');
            foreach($dataUsersForget as $usersForget)
            {
                if($email == $usersForget[0])
                {
                    return true;
                }
            }
            return false;
        }
    }

    /**
     * elle permet de générer un token
     * @return string la chaine de caractère unique et sécuriser
     */
    function generator_token()
    {
        return bin2hex(random_bytes(32));
    }
    /** 
     * elle permet de sauvegarder le token en bd
    */
    function save_token()
    {
        $token = generator_token();
        
        //date d'expiration du token
        date_default_timezone_set('Africa/Douala');
        $timestamp = time() + (15*60);
        $expireAt = date('Y-m-d H:i:s', $timestamp);

        if(recup_data('data/reset_tokens.json'))
        {
            $dataTokens = recup_data('data/reset_tokens.json');
            if(!is_array($dataTokens))
            {
                $dataTokens = [];
            }
        }
        else
        {
            $dataTokens = []; // data qui contiendra les données tokens(email, token, date d'expiration du tokens)
        }

        $email = $_SESSION['email_forget_valide'];

        // Supprimer les anciens tokens pour cet e-mail
        $dataTokens = array_filter($dataTokens, function ($entry) use ($email) {
            return $entry['email'] !== $email;
        });

        // Ajouter le nouveau token
        $dataTokens[] = [
            'email' => $email,
            'token' => $token,
            'expires_at' => $expireAt,
        ];

        // Sauvegarder dans le fichier JSON
        file_put_contents('data/reset_tokens.json', json_encode(array_values($dataTokens), JSON_PRETTY_PRINT));

        return [$dataTokens, $token];
    }