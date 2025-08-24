<?php

    require('actions/data_base.php');

    // recupérer toute les questions de l'utilisateur connecter
    $getAllMyQuestions = $bdd->prepare('SELECT id, title, description FROM questions WHERE id_author = ? ORDER BY id DESC');
    $getAllMyQuestions->execute(array($_SESSION['id']));

    $questions = $getAllMyQuestions->fetchAll();

