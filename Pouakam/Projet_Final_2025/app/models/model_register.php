<?php

    require_once('../app/config/connect_db.php');
    
    /**
     * business logic of user registration
     *
     * @param  string $username name enter by user
     * @param  string $email email enter by user
     * @param  string $password password by user
     * @return array {
     *      @type bool 'success' noted  if the register is successful 
     *      @type string 'error' error register
     *      @error string 'save' the register is successful 
     * }
     */
    function logic_register_user($username, $email, $password) {

        $pdo = connect_db();

        //check if email is exists
        $query = $pdo->prepare('SELECT*FROM users WHERE email = ?');
        $query->execute(array($email));

        if($query->fetch() > 0) {
            return [
                'success' => false,
                'error' => 'Sorry, this email address already exists. *'
            ];
        } else {
            //insert user informations in data base
            $conn = $pdo->prepare('INSERT INTO users(`name`, `email`, `password`, `role`) VALUES (?, ?, ?, ?)');
            $conn->execute(array($username, $email, $password, 'student'));

            if($conn) {
                return [
                    'success' => true,
                    'save' => 'Information successfully saved, click here to login. *'
                ];
            } else {
                return [
                    'success' => false,
                    'error' => 'An error occurred while saving your information, please try again. *'
                ];
            }
        }
    }