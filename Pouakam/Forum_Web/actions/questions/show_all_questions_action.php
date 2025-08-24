<?php

    require('actions/data_base.php');

    // recuperer un nombres de 6 questions par defaut sans recherche
    $getAllQuestions = $bdd->query('SELECT * FROM questions ORDER BY id DESC LIMIT 0,6');

    // verifier si une recherche a été entrer par l'utilisateur
    if(isset($_GET['search']) AND !empty($_GET['search']))
    {
        // recherche user
        $userSearch = $_GET['search'];

        // récupérer toute les reponses qui contient dans leur titre la recherche
        $getAllQuestions = $bdd->query('SELECT * FROM questions WHERE title LIKE "%'.$userSearch.'%" ORDER BY id DESC ');
    }