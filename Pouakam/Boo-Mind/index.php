<?php
    session_start();
    //inclusion du module relative au stockage des taches ajouter dans le fichier datBase.json...
    require_once('taskStorage.php');
    // Initialiser $_SESSION['taches'] s'il n'existe pas déjà
    if (!isset($_SESSION['taches'])) {
        $_SESSION['taches'] = [];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BooMind.cm</title>
    <link rel="stylesheet" href="style_Project/style.css">
    <link rel="stylesheet" href="style_Project/bootstrap-icons/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <h1>BooMind</h1>
        <!-- Formulaire pour add les tasks... -->
        <form action="#" method="post">
            <div class="input-container">
                <input type="text" name="taskText" id="taskInput" placeholder="Enter your Task..." autocomplete="off" required>
                <button type="submit" name="addTaskBtn" id="addTaskBtn">Add Task</button>
            </div>
            <?php
                foreach($_SESSION['taches'] as $keysTasks => $lisTasks){
                    echo '<div class="container-view-task">';
                        echo '<span>'.$lisTasks.'</span>';          
                        echo '<button type="submit" name="deleteTaskBtn" class="deleteTaskBtn">
                                <i class="bi bi-trash"></i>
                            </button>';
                    echo '</div>';
                }
            ?>
        </form>
    </div>
</body>
</html>