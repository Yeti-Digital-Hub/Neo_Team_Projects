<?php
    /**
     * ce fichier contient toute la logique métier principale du système;
     * et est inclut dans : index.php
     * il va permettre aux différentes fonctions créées d'intéragir entre eux  
     * inclut: function_login.php
     */

    require_once('function_login.php');

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

