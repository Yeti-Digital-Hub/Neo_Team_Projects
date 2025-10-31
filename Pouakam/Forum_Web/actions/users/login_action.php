<?php

    session_start();
    require_once __DIR__ . '/../../config/config.php';



    if(isset($_POST['validate']))
    {
        if(!empty($_POST['user-pseudo']) AND !empty($_POST['user-password']))
        {
            $userPseudo = htmlspecialchars($_POST['user-pseudo']);
            $userPassword = htmlspecialchars($_POST['user-password']);

            // Récuperer le pseudo de l'utilisateur
            $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
            $checkIfUserExists->execute(array($userPseudo));

            // Vérifier si le pseudo de l'utilisateur est correct
            if($checkIfUserExists->rowCount() > 0)
            {
                // Récupérer les data de l'utilisateur
                $usersInfos = $checkIfUserExists->fetch();

                // Vérifier si le password est correct
                if(password_verify($userPassword, $usersInfos['password']))
                {
                    // Authentification de l'utilisateur sur le site
                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $usersInfos['id'];
                    $_SESSION['pseudo'] = $usersInfos['pseudo'];
                    $_SESSION['name'] = $usersInfos['name'];
                    $_SESSION['surname'] = $usersInfos['surname'];

                    // Rediriger l'utilisateur vers la home page
                    header("Location: index.php");
                
                }
                else
                {
                    $errorMsg = "Votre mot de passe est incorrect !";
                }
            }
            else
            {
                $errorMsg = "Votre pseudo est incorrect !";
            }
        }
        else
        {
            $errorMsg = "Veuillez compléter tous les champs !";
        }
    }