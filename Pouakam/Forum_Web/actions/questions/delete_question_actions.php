<?php


    session_start();
    require_once __DIR__ . '/../../config/config.php';

    if(!isset($_SESSION['auth']))
    {
        header('Location: ../../login.php');
    }

    if(isset($_GET['id']) AND !empty($_GET['id']))
    {
        if(is_numeric($_GET['id']))
        {
            $idOfQuestionDelete = intval(trim($_GET['id']));

            // verifier si l'id existe
            $checkIfQuestionExists = $bdd->prepare('SELECT id_author FROM questions WHERE id = ?');
            $checkIfQuestionExists->execute(array($idOfQuestionDelete));

            if($checkIfQuestionExists->rowCount() > 0)
            {
                $usersInfos = $checkIfQuestionExists->fetch();

                // verifier si celui qui supprime c'est lui l'auteur de cette question
                if($usersInfos['id_author'] == $_SESSION['id'])
                {

                    // suppression de la question
                    $deteleThisQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
                    $deteleThisQuestion->execute(array($idOfQuestionDelete));

                    //redirection après la supression
                    header('Location: ../../my_questions.php');
                }
                else
                {
                    echo "Vous n'avez pas le droit de supprimer une question qui ne vous appartient pas !";
                }

            }
            else
            {
                echo "Aucune question trouvée !";
            }
        }
        else
        {
            echo "Identifiant de question invalide !";
        }
    }
    else
    {
        echo "Aucune question trouvée !";
    }