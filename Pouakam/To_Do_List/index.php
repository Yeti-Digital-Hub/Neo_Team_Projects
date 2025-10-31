<?php
    session_start();

    require_once 'includes/delete_task.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>To Do List</title>
        <!-- importation de la biliothèque font-awersomes...-->
        <link rel="stylesheet" href="icons/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>To-Do-List App</h1>
        </header>
        <main>
            <section class="container-1">
                <p>Dynamic</p> 
                <p>To Do List App</p> 
                <p>PHP</p>
            </section>
            <section class="container-2">
                <div class="card-title-form">
                    <p class="title-form"><i class="fa-solid fa-list-check"></i> Add and view your tasks</p>
                </div>
                    <?php
                        if(isset($_GET['error'])):
                    ?>
                            <span style="color: red;">Veuillez remplir le champs pour ajouter une tâche!</span>
                    <?php
                        elseif(isset($_GET['success'])):
                    ?>
                            <span style="color: green;">Votre tâche à été ajouter avec success!</span>
                    <?php
                        endif;
                    ?>
                <form action="includes/traitement_index.php" method="post" autocomplete="off">
                    <input type="text" name="new-task" placeholder="Enter your new task">
                    <button type="submit" name="add" title="add task"><i class="fa-solid fa-plus"></i></button>
                </form>
                <div class="view-task">
                    <?php
                        if(isset($_SESSION['task_user']) && !empty($_SESSION['task_user'])):
                            foreach($_SESSION['task_user'] as $keys => $task):
                    ?>
                                <div class='task-item'>
                                        <span class='task-text'><i class='fa-solid fa-clock'></i> <?= htmlspecialchars_decode($task) ?></span>
                                        <a href="?delete=<?= $keys ?>" title="Supprimer" onclick="return confirm('Voulez-vous vraiment supprimer cette tâche ?');">
                                            <i class='fa-solid fa-trash'></i>
                                        </a>
                                </div>
                    <?php             
                            endforeach;
                        else:
                            echo "<p>No tasks available. Please add a task.</p>";
                        endif;
                    ?>
                </div>
            </section>
        </main>
        <footer>
            <p>&copy; 2025 To Do List App - Tous droits réservés</p>
            <p>Conçu par <span class="name-boogie">Boogie</span> Entreprise I-Tech spécialiser dans la conception et developpement de solutions digitales innovantes et modernes</p>
        </footer>
    </body>
</html>