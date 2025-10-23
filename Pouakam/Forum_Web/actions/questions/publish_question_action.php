<?php

        require_once __DIR__ . '/../../config/config.php';

        if(isset($_POST['validate']))
        {
            if(!empty($_POST['title-question']) AND !empty($_POST['description-question']) AND !empty($_POST['content-question']))
            {

                // Obtention des data sur la question à publier
                $questionTitle = htmlspecialchars($_POST['title-question']);
                $questionDescription = nl2br(htmlspecialchars($_POST['description-question']));
                $questionContent = nl2br(htmlspecialchars($_POST['content-question']));
                $questionDate = date('d/m/Y');
                $questionIdAuthor = $_SESSION['id'];
                $questionPseudoAuthor = $_SESSION['pseudo'];

                // Insertion des data sur la question publiée en bd
                $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO questions (title, description, content, id_author, pseudo_author, date_publish) VALUES (?, ?, ?, ?, ?, ?)');
                $insertQuestionOnWebsite->execute(
                    array(
                        $questionTitle, 
                        $questionDescription, 
                        $questionContent, 
                        $questionIdAuthor, 
                        $questionPseudoAuthor, 
                        $questionDate
                    )
                );
                
                // message de success d'enregistrement d'une question
                $successMsg = "Votre question à bien été publiée sur le forum";
            }
            else
            {
                $errorMsg ="Veuillez remplir tous les champs !";
            }
        }