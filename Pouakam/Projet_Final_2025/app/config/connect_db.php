<?php

    // function to connect to the database
    function connect_db() {
        $localhost = 'localhost';
        $login = 'root';
        $password = 'root';
        $database = 'resto_esign_db';

        try {

            $pdo = new PDO ('mysql:host='.$localhost.';dbname='.$database, $login, $password);
            return $pdo;

        } catch (PDOException $e) {

            die("Connection failed: " . $e->getMessage());

        }
    }