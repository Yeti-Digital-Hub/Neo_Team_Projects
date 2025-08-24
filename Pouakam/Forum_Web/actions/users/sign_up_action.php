<?php

    require('actions/data_base.php');
    session_start();
    if(isset($_POST['validate']))
    {
        if(!empty($_POST['user-pseudo']) AND !empty($_POST['user-name']) AND !empty($_POST['user-surname']) AND !empty($_POST['user-password']))
        {
            $userPseudo = htmlspecialchars($_POST['user-pseudo']);
            $userName = htmlspecialchars($_POST['user-name']);
            $userSurname = htmlspecialchars($_POST['user-surname']);
            $userPassword = password_hash($_POST['user-password'], PASSWORD_DEFAULT, ['cost' => 12]);

            // Vérifier si l'utilisateur à déjà un compte
            $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
            $checkIfUserAlreadyExists->execute(array($userPseudo));

            if($checkIfUserAlreadyExists->rowCount() == 0)
            {
                // Insérer l'utilisateur en bd
                $insertUserOnWebsite = $bdd->prepare('INSERT INTO users (pseudo, name, surname, password) VALUES (?, ?, ?, ?)');
                $insertUserOnWebsite->execute(array($userPseudo, $userName, $userSurname, $userPassword));

                // Récuperer le données de l'utilisateur
                $userId = $bdd->lastInsertId();

                // Authentification de l'utilisateur sur le site
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userId;
                $_SESSION['pseudo'] = $userPseudo;
                $_SESSION['name'] = $userName;
                $_SESSION['surname'] = $userSurname;

                // Rediriger l'utilisateur vers la home page
                header('Location: index.php');
                
            }
            else
            {
                $errorMsg = "Vous avez déjà un compte !";
            }
        }
        else
        {
            $errorMsg = "Veuillez compléter tous les champs !";
        }
    }