<?php

    // code de connexion à la dataBase

    $dsn = 'mysql:host=localhost;dbname=forum;charset=utf8;';
    $user = 'phpmyadmin';
    $pass = 'Root@1234';

    try
    {
        $bdd = new PDO($dsn, $user, $pass);
    }
    catch(Exception $e)
    {
        die('erreur de connexion à la data base :'.$e->getMessage());
    }