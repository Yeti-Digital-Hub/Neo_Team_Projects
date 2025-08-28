<?php

    $host = "localhost";
    $dbname = "forum";
    $username = "root";   // à remplacer par vos identifiants
    $password = "";       // à remplacer par vos identifiants

    try {
        $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    } catch (Exception $e) {
        die("Erreur de connexion à la base : " . $e->getMessage());
    }
