<?php

    require_once __DIR__ . '/../../config/config.php';


    if(isset($_GET['id']) AND !empty($_GET['id']))
    {
        if(is_numeric($_GET['id']))
        {
            $idOfUser = intval(trim($_GET['id']));

            // verifier si l'id existe
            $checkIfUserExist = $bdd->prepare('SELECT id, pseudo, name, surname FROM users WHERE id = ?');
            $checkIfUserExist->execute(array($idOfUser));

            if($checkIfUserExist->rowCount() > 0)
            {

                // récupérer les données personelles d'un user
                $userInfos = $checkIfUserExist->fetch();

                $userPseudo = $userInfos['pseudo'];
                $userName = $userInfos['name'];
                $userSurname = $userInfos['surname'];

                // récuperer les posts publiées par l'utilisateur
                $getQuestions = $bdd->prepare('SELECT * FROM questions WHERE id_author = ? ORDER BY id DESC');
                $getQuestions->execute(array($idOfUser));

                $userQuestions = $getQuestions->fetchAll();
            }
            else
            {
                $php_errormsg = "Aucun utilisateur trouvé !";
            }
        }
        else
        {
            $php_errormsg = "Identifiant invalide !";
        }
    }
    else
    { 
        $php_errormsg = "Aucun utilisateur trouvé !";
    }