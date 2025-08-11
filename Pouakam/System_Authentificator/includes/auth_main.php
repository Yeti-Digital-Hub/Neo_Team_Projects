<?php
    /**
     * ce fichier contient toute la logique métier principale du système;
     * et est inclut dans : index.php, forget_password.php, reset_password.php;
     * il va permettre aux différentes fonctions créées d'intéragir entre eux  
     * inclut: function_login.php
     */

    require_once('function_login.php');
    require_once('function_forget_password.php');


    /**
     * Logique métier de la connexion et déconnexion utilisateur
     */
    if(isset($_POST['btn-login']))
    {
        if(verify($_POST['email-login']) AND verify($_POST['password-login']))
        {

            if(security_email($_POST['email-login']))
            {
                // nettoyage et securisation des données utilisateur
                $emailLogin = security_email($_POST['email-login']);
                $passwordLogin = security_password($_POST['password-login']);  

                // verfication des indedifiants
                $returnAuth = auth_login($emailLogin, $passwordLogin);

                if($returnAuth[0] == true){
                    $_SESSION['email_login'] = $emailLogin;
                    $_SESSION['id_login'] = $returnAuth[1];
                    header('Location: dashboard_user.php');
                    exit;
                }
                else
                {
                    header("Location: index.php?error-1=Idendifiants incorrects");
                    exit;
                }
            }
            else
            {
                header("Location: index.php?error-2=Email invalide");
                exit;
            }

        }else{
                header("Location: index.php?error-3=Veuillez remplir tous les champs");
                exit;
        }
    }


    /**
     * Logique métier du forget password
     */
    if(isset($_POST['btn-forget']))
    {
        if(verify($_POST['email-forget']))
        {
            if(security_email($_POST['email-forget']))
            {
                $emailForget = security_email($_POST['email-forget']);
                if(auth_forget($emailForget))
                {
                    $_SESSION['email_forget_valide'] = $emailForget;
                    header('Location: consult_mail.php');
                    exit;
                }
                else
                {
                    header('Location: forget_password.php?error-4=Identifiants incorrects');
                }
            }
            else
            {
                header('Location: forget_password.php?error-5=Email invalide');
                exit;
            }
        }
        else
        {
            header('Location: forget_password.php?error-6=Veuillez remplir tous les champs');
            exit;
        }
    }
