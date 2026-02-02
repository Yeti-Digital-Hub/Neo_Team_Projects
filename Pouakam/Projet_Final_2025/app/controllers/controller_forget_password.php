<?php

    require_once('../app/models/model_forget_password.php');

    /**
     * controller of the recover password (The forget password)
     *
     * @return void
     */
    function forget_password(){

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // check if the fields not empty
            if(!empty($_POST['email'])) {

                // recover email user
                $emailUser = filter_var(filter_data($_POST['email']), FILTER_VALIDATE_EMAIL);

                // function of the model forget password 
                $forgetPassword = logic_forget_password($emailUser);

                if(!empty($forgetPassword)) {

                    // forget password is successful
                    if($forgetPassword['success']) {

                        $success_msg = $forgetPassword['message'];

                    } else {
                        $error_msg = $forgetPassword['error'];
                    }

                }

            } else {
                $error_msg = 'Veuillez remplir tous les champs. ❌❌';

            }
        }

        require_once('../app/views/view_forget_password.php');
    }