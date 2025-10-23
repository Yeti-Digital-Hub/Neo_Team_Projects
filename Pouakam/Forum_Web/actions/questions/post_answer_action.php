<?php

    // validation du formulaire de réponses
    if(isset($_POST['validate']))
    {

        if(!empty($_POST['answer']))
        {

            // answer user
            $answerUser = nl2br(htmlspecialchars($_POST['answer']));

            // insertion de la answer
            $insertAnswer = $bdd->prepare('INSERT INTO answers (id_author, pseudo_author, id_question, content_answer) VALUES (?, ?, ?, ?)');
            $insertAnswer->execute(array($_SESSION['id'], $_SESSION['pseudo'], $idOfTheQuestion, $answerUser));
        }
        else
        {
            $php_errormsg = "Veuillez remplir le champ";
        }
    }
