<?php

    require_once('../app/config/connect_db.php');

    function logic_reset_password($tokenHash) {

        $conn = connect_db();

        // Check the token
        $stmt = $conn->prepare("
            SELECT * FROM password_resets
            WHERE token_hash = ? AND expires_at > NOW()
        ");
        $stmt->execute([$tokenHash]);
        $reset = $stmt->fetch(PDO::FETCH_ASSOC);

        return $reset;

    }