<?php

    require('actions/data_base.php');

    // verifier si l'id de la question est dans l'url
    if(isset($_GET['id']) AND !empty($_GET['id']))
    {
        // verifier si cet id est nombre
        if(is_numeric($_GET['id']))
        {
            $idOfQuestion = intval(trim($_GET['id']));

            
            $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
            $checkIfQuestionExists->execute(array($idOfQuestion));

            // verifions si l'id de la question exist
            if($checkIfQuestionExists->rowCount() > 0)
            {
                // verifier si l'utilisateur qui veut modifier la question est bien celui qui la publier 
                $questionInfos = $checkIfQuestionExists->fetch();
                if($questionInfos['id_author'] == $_SESSION['id'])
                {
                    $questionTitle = $questionInfos['title'];
                    $questionDescription = $questionInfos['description'];
                    $questionContent = $questionInfos['content'];

                    // supprission des <br/>
                    $questionDescription = str_replace('<br />', '', $questionDescription);
                    $questionContent = str_replace('<br />', '', $questionContent);
                }
                else
                {
                    $errorMsg = "Aucune question n'a été trouvée";
                }

            }
            else
            {
                $errorMsg = "Aucune question n'a été trouvée";
            }
        }
        else
        {
            $errorMsg = "Identifiant de question invalide";
        }
    }
    else
    {
        $errorMsg = "Aucune question n'a été trouvée";
    }