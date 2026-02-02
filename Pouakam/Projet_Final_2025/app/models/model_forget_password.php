<?php

    require_once('../app/config/connect_db.php');

    /**
     * logic of the recover password (The forget password)
     *
     * @param  string $email email enter by user
     * @return array {
     *      @type bool 'success' noted  if the sign in is successful
     *      @type string 'error' error message if sign in failed
     * }
     */
    function logic_forget_password($email) {

        $conn = connect_db();

        // check if the email is exits
        $stmt = $conn->prepare('SELECT id, name FROM users WHERE email = ?');
        $stmt->execute([$email]);

        if($stmt->rowCount() >0) {
            $user = $stmt->fetch();
            if($user){

                // Token generation
                $token = bin2hex(random_bytes(32));
                $tokenHash = hash('sha256', $token);

                // Expiration : 1 hour
                date_default_timezone_set('Africa/Douala');
                $expiresAt = date('Y-m-d H:i:s', time() + 3600);

                // store the token
                $stmt = $conn->prepare("
                    INSERT INTO password_resets (user_id, token_hash, expires_at)
                    VALUES (?, ?, ?)
                ");
                $stmt->execute([$user['id'], $tokenHash, $expiresAt]);

                // Link sent by email
                $resetLink = "http://localhost/Neo_Team_Projects/Pouakam/Projet_Final_2025/public/index.php?action=reset_password&token=" . urlencode($token);

                if (!send_mail($email, $user, $resetLink)) {
                    echo "Erreur d'envoi du mail";
                } else {
                    return [
                        'success' => true, 
                        'message' => 'nous avons envoyé un lien de réinitialisation de mot de passe par email 🎉'
                    ];
                }
            }
        }
        else {
            return [
                'success' => false, 
                'error' => 'No account found with that email address.'
            ];
        }
    }