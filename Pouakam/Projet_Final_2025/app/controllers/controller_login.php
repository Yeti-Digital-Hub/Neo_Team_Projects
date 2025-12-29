<?php

    require_once('../app/models/model_login.php');

        
    /**
     * filter email and password enter by user
     *
     * @param  string $data enter of user
     * @return string $data enter of user filter
     */
    function filter_data($data) {
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);

        return $data;
    }
    
    /**
     * this function is the controller of the sigin in
     *
     * @return void
     */
    function login() {
        
        $showSplash = true; 

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // check if the fields not empty
            if(!empty($_POST['email']) && !empty($_POST['password'])) {

                // recover email & password user
                $emailUser = filter_var(filter_data($_POST['email']), FILTER_VALIDATE_EMAIL);
                $passwordUser = filter_data($_POST['password']);

                // function of the model sign in 
                $login = logic_sign_in($passwordUser, $emailUser);

                if(!empty($login)) {

                    // sign in is successful
                    if($login['success']) {

                        $_SESSION['user_id'] = $login['user']['id'];
                        $_SESSION['user_name'] = $login['user']['name'];
                        $_SESSION['user_role'] = $login['user']['role'];

                        // check role before of redirection
                        if($_SESSION['user_role'] == 'student') {
                            header('Location: index.php?action=dashboard_student');
                            exit();
                        } else {
                            $error_msg = 'Une erreur est survenu *';
                        }
                    } else {
                        $error_msg = $login['error'];
                    }

                }
                
            } else {
                $error_msg = 'Please fill in all fields. *';
            }

            
        }
        require_once('../app/views/view_login.php'); 
    }
