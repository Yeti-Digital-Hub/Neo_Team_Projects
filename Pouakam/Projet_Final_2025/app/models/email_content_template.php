<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réinitialisation de mot de passe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333333;
        }
        p {
            color: #555555;
            line-height: 1.5;
        }
        .button {
            display: inline-block;
            background-color: #007BFF;
            color: #ffffff !important;
            padding: 10px 20px;
            margin: 20px 0;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .footer {
            font-size: 12px;
            color: #888888;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Réinitialisation de votre mot de passe</h2>
        <p>Bonjour [Nom de l’utilisateur],</p>
        <p>Vous avez demandé la réinitialisation de votre mot de passe pour votre compte sur <strong>[Nom de l’application]</strong>.</p>
        <p>Pour définir un nouveau mot de passe, cliquez sur le bouton ci-dessous :</p>
        <a href="[LIEN_DE_REINITIALISATION]" class="button">Réinitialiser mon mot de passe</a>
        <p>Si le bouton ne fonctionne pas, copiez-collez ce lien dans votre navigateur :</p>
        <p>[LIEN_DE_REINITIALISATION]</p>
        <p>⚠️ Ce lien est valable 1 heure. Si vous n’avez pas demandé cette réinitialisation, vous pouvez ignorer cet email.</p>
        <p>Merci,<br>L’équipe <strong>[Nom de l’application]</strong></p>
        <div class="footer">
            Cet email est généré automatiquement, merci de ne pas y répondre.
        </div>
    </div>
</body>
</html>

