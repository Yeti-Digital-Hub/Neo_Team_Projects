<?php
    // Suppression via GET
    if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
        $index = intval($_GET['delete']);
        if (isset($_SESSION['taches'][$index])) {
            unset($_SESSION['taches'][$index]);
            $_SESSION['taches'] = array_values($_SESSION['taches']); // Réindexation
            storeTasks($_SESSION['taches']);
            // Redirection pour éviter la suppression multiple si on recharge la page
            header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
            exit;
        }
    }
?>