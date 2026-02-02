<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    date_default_timezone_set('Africa/Douala');
    require_once 'db.php';

    $token = $_GET['token'] ?? null;

    if (!$token) {
        die("Token manquant");
    }

    $tokenHash = hash('sha256', $token);

    // Vérifier le token
    $stmt = $conn->prepare("
        SELECT * FROM password_resets
        WHERE token_hash = ? AND expires_at > NOW()
    ");

    $stmt->execute([$tokenHash]);
    $reset = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$reset) {
        die("Token invalide ou expiré");
    }

    // Traitement du formulaire
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $password = $_POST['password'] ?? '';
        $confirm  = $_POST['confirm_password'] ?? '';

        if (empty($password) || empty($confirm)) {
            $error = "Tous les champs sont obligatoires";
        } elseif ($password !== $confirm) {
            $error = "Les mots de passe ne correspondent pas";
        } elseif (strlen($password) < 8) {
            $error = "Le mot de passe doit contenir au moins 8 caractères";
        } else {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            // Mise à jour du mot de passe
            $stmt = $conn->prepare("
                UPDATE users SET password = ?
                WHERE user_id = ?
            ");
            $stmt->execute([$passwordHash, $reset['user_id']]);

            // Suppression du token
            $stmt = $conn->prepare("
                DELETE FROM password_resets WHERE user_id = ?
            ");
            $stmt->execute([$reset['user_id']]);

            $success = "Mot de passe réinitialisé avec succès 🎉";
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Reset password</title>
    </head>
    <body>

        <h2>Nouveau mot de passe</h2>

        <?php if (!empty($error)): ?>
            <p style="color:red"><?= $error ?></p>
        <?php endif; ?>

        <?php if (!empty($success)): ?>
            <p style="color:green"><?= $success ?></p>
        <?php else: ?>
        <form method="post">
            <label>Nouveau mot de passe</label><br>
            <input type="password" name="password" required><br><br>

            <label>Confirmer le mot de passe</label><br>
            <input type="password" name="confirm_password" required><br><br>

            <button type="submit">Réinitialiser</button>
        </form>
        <?php endif; ?>

    </body>
</html>
