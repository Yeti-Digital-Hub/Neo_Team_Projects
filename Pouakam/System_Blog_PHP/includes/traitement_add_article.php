<?php

    // fichier des functions
    require_once 'functions.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if(verify_empty($_POST['title-article']) AND verify_empty($_POST['contenu-article']) AND !empty($_FILES['img-article']['name']))
        {
            $titleArticle = security_str($_POST['title-article']);
            $contentArticle = security_str($_POST['contenu-article']);
            $imgArticle = $_FILES['img-article']['name'];

            //fuseau horaire et date actuelle
            date_default_timezone_set('Africa/Douala');
            $dataPublication = date('Y-m-d H-i-s', time());

            //recupère les articles en base de donnée
            $file = 'data/db_articles.json';
            if(file_exists($file))
            {
                $dataBaseAricle = json_decode(file_get_contents($file), true); 
            }
            else
            {
                $dataBaseAricle = []; 
            }

            $newArticle = [
                "titre_article" => $titleArticle,
                "auteur" => "Boogie",
                "date_publication" => $dataPublication,
                "contenu" => $contentArticle,
                "img-article" => $imgArticle
            ];

            $dataBaseAricle[] = $newArticle;
            
            if(file_put_contents($file, json_encode($dataBaseAricle, JSON_PRETTY_PRINT)))
            {
                header('Location: add_article.php?success=article publier avec success');
            }
            else
            {
                header('Location: add_article.php?error2=erreur survenu lors de la publication de l\'article !');
                exit;
            }
        }
        else
        {
            header('Location: add_article.php?error1=veuillez remplir tous les champs !');
            exit;
        }
    }