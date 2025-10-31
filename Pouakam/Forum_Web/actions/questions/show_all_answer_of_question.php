<?php

    $getAllAnswerOfQuestion = $bdd->prepare('SELECT id_author, pseudo_author, id_question, content_answer FROM answers WHERE id_question = ? ORDER BY id DESC');
    $getAllAnswerOfQuestion->execute(array($idOfTheQuestion));

    $answersQuestion = $getAllAnswerOfQuestion->fetchAll();