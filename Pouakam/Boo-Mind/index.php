<?php
    session_start();
    //inclusion du module relative au stockage des taches ajouter dans le fichier datBase.json...
    require_once('taskStorage.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BooMind</title>
    <link rel="stylesheet" href="style-project/style.css">
</head>
<body>
    <div class="container">
        <h1>BooMind</h1>
        <!-- Formulaire pour add les tasks... -->
        <form action="#" method="post" class="input-container">
            <input type="text" name="taskText" id="taskInput" placeholder="Enter your Task..." autocomplete="off" required>
            <button type="submit" name="addTaskBtn" id="addTaskBtn">Add Task</button>
        </form>
    </div><br>
    <div class="container-view-task">
        <?php
            // affichage des taches...
            if(isset($_SESSION['taches']) && !empty($_SESSION['taches'])){
                echo '<h2>My Tasks</h2>';
                echo '<ul class="task-list">';
                foreach($_SESSION['taches'] as $indexTask => $task){
                    echo '<li class="task-item">'.$task.'</li>';
                }
                echo '</ul>';
            } else {
                echo '<h2>No Tasks Available...</h2>';
            }
        ?>
    </div>
</body>
</html>