<?php

    if(isset($_GET['delete']) AND is_numeric($_GET['delete']))
    {
        $idTaskDelete = intval(trim($_GET['delete']));
        
        // suppression de la tâche indexée
        if(isset($_SESSION['task_user'][$idTaskDelete]))
        {
            unset($_SESSION['task_user'][$idTaskDelete]);
            $_SESSION['task_user'] = array_values($_SESSION['task_user']);
            file_put_contents('data/data_base.txt', json_encode($_SESSION['task_user'], JSON_PRETTY_PRINT));
        }
    }