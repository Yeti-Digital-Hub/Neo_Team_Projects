<?php

    session_start();
    
    // filtrage de la tache entrée par l'utilisateur
    function security_task($donnee)
    {
        $donnee = htmlspecialchars(trim($donnee));
        return $donnee;
    }

    // récuération de la tâche entrée
    if(isset($_POST['add']))
    {
        if(isset($_POST['new-task']) AND !empty($_POST['new-task']))
        {
            $newTask = security_task($_POST['new-task']);

            // initialisation du tableau de taches
            if(file_exists('../data/data_base.txt'))
            {
                $_SESSION['task_user'] = json_decode(file_get_contents('../data/data_base.txt'), true);
            }
            else
            {
                $_SESSION['task_user'] = [];
            }

            // ajout et stockahe de taches
            if(isset($newTask))
            {
                $_SESSION['task_user'][] = $newTask;
                file_put_contents('../data/data_base.txt', json_encode($_SESSION['task_user'], JSON_PRETTY_PRINT));
            }
            header("Location: ../index.php?success=1");
            exit;
        }
        else
        {
            header("Location: ../index.php?error=1");
        }
    }