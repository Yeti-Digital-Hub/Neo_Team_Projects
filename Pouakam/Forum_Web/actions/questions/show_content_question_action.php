<?php

    require('actions/data_base.php');

    // verifier si l'id est rentrer dans la l'URL
    if(isset($_GET['id']) AND !empty($_GET['id']))
    {
        if(is_numeric($_GET['id']))
        {
            $idOfTheQuestion = intval(trim($_GET['id']));

            // recuperer l'id de la question
            $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
            $checkIfQuestionExists->execute(array($idOfTheQuestion));

            // verifier si l'id existe
            if($checkIfQuestionExists->rowCount() > 0)
            {
                $questionInfos = $checkIfQuestionExists->fetch();
                
                // les data sur la question à consulter
                $questionTitle = $questionInfos['title'];
                $questionContent = $questionInfos['content'];
                $questionIdAuthor = $questionInfos['id_author'];
                $questionPseudoAuthor = $questionInfos['pseudo_author'];
                $dateQuestionPublish = $questionInfos['date_publish'];

            }
            else
            {
                $errorMsg = "Aucune question trouvée !";
            }
        }
        else
        {
            $errorMsg = "Identifiant de question invalide !";
        }
    }
    else
    {
        $errorMsg = "Aucune question trouvée !";
    }