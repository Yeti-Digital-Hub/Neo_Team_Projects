<?php

    require_once('../app/models/model_register.php');

    function register() {

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            //check if the fields not empty
            if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm-password'])) {

                //user informations
                $username = filter_data($_POST['username']);
                $email = filter_var(filter_data($_POST['email']), FILTER_VALIDATE_EMAIL);

                //treatment of password
                $password = filter_data($_POST['password']);
                $confirmPassword = filter_data($_POST['confirm-password']);

                if($password == $confirmPassword) {
                    
                    if(strlen($password) >= 8) {

                        //check the form password (Regex)
                        if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)){

                            $passwordUser = password_hash($password, PASSWORD_DEFAULT);

                            $logiRegisteUser = logic_register_user($username, $email, $passwordUser);

                            if($logiRegisteUser['success']) {
                                $success_msg = $logiRegisteUser['save'];

                            } else {
                                $error_msg = $logiRegisteUser['error'];
                            }

                        } else {
                            $error_mdp = [
                                1,
                                $username,
                                $email,
                                $password,
                                $confirmPassword
                            ];
                        }

                    } else {
                        $error_mdp = [
                            2,
                            $username,
                            $email,
                            $password,
                            $confirmPassword
                        ];
                    }
                } else {
                    $error_mdp = [
                        3,
                        $username,
                        $email,
                        $password,
                        $confirmPassword
                    ];
                }
            } else {
                $error_msg = 'Veuillez remplir tous les champs. ❌❌';
            }
        }

        require_once('../app/views/view_register.php');
    }