<?php

    $server ="localhost";
    $login ="root";
    $pass ="root";

    try {
        $conn= new PDO('mysql:host='.$server.';dbname=resetPassword', $login, $pass);
    }
    catch(PDOException $e) {
        die('error'.$e->getMessage());
    }