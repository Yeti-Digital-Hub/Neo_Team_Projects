<?php

    require_once('../app/config/connect_db.php');
    
    /**
     * try to sign in user with email and password
     *
     * @param  string $password password no hashed enter by user
     * @param  string $email email enter by user
     * @return array {
     *      @type bool 'success' noted  if the sign in is successful
     *      @type array 'user' user informations if sign is successful
     *      @type string 'error' error message if sign in failed
     * }
     */
    function logic_sign_in($password, $email) {

        $conn = connect_db();

        // check if the email is exits
        $query = $conn->prepare('SELECT*FROM users WHERE email = ?');
        $query->execute(array($email));

        if($query->rowCount() > 0) {
            // recover the infomations user
            $usersInfos = $query->fetch();

            // check if the password is correct
            if($usersInfos && password_verify($password, $usersInfos['password'])) {
                return ['success' => true, 'user' => $usersInfos];
            } 
        }

        return [
            'success' => false, 
            'error' => 'Veuillez vérifier votre email et/ou votre mot de passe (identifiants de connexion incorrects). ❌❌'
        ];
        
    }


    