<?php

    require_once('../app/models/model_reset_password.php');

    /**
     * controller of the recover password (The reset password)
     *
     * @return void
     */
    function reset_password(){

        $token = $_GET['token'] ?? null;

        if (!$token) {
            die("Token manquant ❌❌");
        }
        $tokenHash = hash('sha256', $token);

        $logicResetPassword = logic_reset_password($tokenHash);

        if (!$logicResetPassword) {
            die("Token invalide ou expiré ❌❌");
        }

        // Traitement du formulaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // check if the fields not empty
            if(!empty($_POST['password']) && !empty($_POST['confirm_password'])) {

                //treatment of password
                $password = filter_data($_POST['password']);
                $confirmPassword = filter_data($_POST['confirm_password']);

                if($password == $confirmPassword) {

                    if(strlen($password) >= 8) {
                         //check the form password (Regex)
                        if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)){

                            // hashed the new password
                            $passwordUser = password_hash($password, PASSWORD_DEFAULT);

                            $conn = connect_db(); // connect db

                            // update of password
                            $stmt = $conn->prepare("
                                UPDATE users SET password = ?
                                WHERE id = ?
                            ");
                            $stmt->execute([$passwordUser, $logicResetPassword ['user_id']]);

                            // delete the token
                            $stmt = $conn->prepare("
                                DELETE FROM password_resets WHERE user_id = ?
                            ");
                            $stmt->execute([$logicResetPassword ['user_id']]);

                            header('Location: index.php?action=login&reset=success');
                            exit;


                        } else {
                            $error_mdp = [
                                1,
                                $password,
                                $confirmPassword
                            ];
                        }
                    } else {
                        $error_mdp = [
                            2,
                            $password,
                            $confirmPassword
                        ];
                    }

                } else {
                    $error_mdp = [
                        3,
                        $password,
                        $confirmPassword
                    ];
                }

            } else {
                $error_msg = 'Veuillez remplir tous les champs. ❌❌';
            }
        }


        require_once('../app/views/view_reset_password.php');
    }