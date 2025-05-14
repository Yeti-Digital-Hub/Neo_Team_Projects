<?php
    session_start();
    //inclusion du module est relative au stockage des taches ajouter dans le fichier datBase.json...
    require_once('taskStorage.php');
    //inclusion du module est relative à la suppression des taches ajouter dans le fichier datBase.json...
    require_once('deleteTask.php');
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
        </form>
        <!-- Liste des tâches -->
        <?php foreach ($_SESSION['taches'] as $index => $task): ?>
            <div class="container-view-task">
                <span><?= htmlspecialchars($task) ?></span>
                <a href="?delete=<?= $index ?>" class="deleteTaskBtn" title="Supprimer" onclick="return confirm('Supprimer cette tâche ?');">
                    <i class="bi bi-trash"></i>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>