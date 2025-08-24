<?php

    // validation des champs
    if(isset($_POST['validate']))
    {
        if(!empty($_POST['title-question']) AND !empty($_POST['description-question']) AND !empty($_POST['content-question']))
        {

            //recuperaction des data modifier
            $newTitleQuestion = htmlspecialchars($_POST['title-question']);
            $newDescriptionQuestion = nl2br(htmlspecialchars($_POST['description-question']));
            $newContentQuestion = nl2br(htmlspecialchars($_POST['content-question']));

            // modification des infos de la question de l'id passer en paramètre d'URL
            $editQuestionOnWebsite = $bdd->prepare('UPDATE questions SET title = ?, description = ?, content = ? WHERE id = ?');
            $editQuestionOnWebsite->execute(array($newTitleQuestion, $newDescriptionQuestion, $newContentQuestion, $idOfQuestion));

            // Redirection dans la page d'affichage des questions de l'utilisateur
            header('Location: my_questions.php');
        }
        else
        {
            $errorMsg = "Veuillez remplir tous les champs";
        }
    }