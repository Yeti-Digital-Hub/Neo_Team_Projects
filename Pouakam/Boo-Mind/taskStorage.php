<?php
    //fonction pour le filtrage des taches à ajouter...
    function filterTasks($tasks) {
        $tasks = trim($tasks);
        $tasks = htmlspecialchars($tasks);
        $tasks = stripslashes($tasks);
        return $tasks;
    }

    //fonction pour le stockage des taches...
    function storeTasks($tasks) {
        $tasks = json_encode($tasks, JSON_PRETTY_PRINT);
        file_put_contents('dataBase.json', $tasks);
    }
    
    // filtrage du champs de texte de la tache et ajout des taches dans ma base de donnée (dataBase.json)...
    if(isset($_POST['addTaskBtn'])){
        if(isset($_POST['taskText']) && !empty($_POST['taskText'])){
            $_SESSION['taches'][] = filterTasks($_POST['taskText']);
            // stockage des taches dans le fichier dataBase.json...
            storeTasks($_SESSION['taches']);
        }    
    }
?>
