<?php 

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  require_once '../vendor/autoload.php';
  require_once 'db.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site web</title>
  </head>
  <body>
    <h2>Forgot password</h2>
    <form method="post">
      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>
        <button type="submit">Send me a random password</button>
      </div>
    </form>
  </body>
</html>

<?php 

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['email'])) {
      // Email envoyé par l'utilisateur
      $email = $_POST['email'];

      // Vérifier si l'utilisateur existe
      $stmt = $conn->prepare("SELECT user_id FROM users WHERE email = ?");
      $stmt->execute([$email]);

      if($stmt->rowCount() == 1) {
        $user = $stmt->fetch();

        if($user){

          // Génération du token
          $token = bin2hex(random_bytes(32));
          $tokenHash = hash('sha256', $token);

          // Expiration : 1 heure
          date_default_timezone_set('Africa/Douala');
          $expiresAt = date('Y-m-d H:i:s', time() + 3600);

          // Stocker le token
          $stmt = $conn->prepare("
              INSERT INTO password_resets (user_id, token_hash, expires_at)
              VALUES (?, ?, ?)
          ");
          $stmt->execute([$user['user_id'], $tokenHash, $expiresAt]);

          // Lien envoyé par email
          $resetLink = "http://localhost/Neo_Team_Projects/Pouakam/Projet_Final_2025/testSendMail/reset_password.php?token=$token";

          $mail = new PHPMailer(true);

          //Configure an SMTP
          $mail->isSMTP();
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPAuth = true;
          $mail->Username = 'backendvanelle@gmail.com';
          $mail->Password = 'rdyw xnee xoga kuvt';
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
          $mail->Port = 587;

          // Sender information
          $mail->setFrom('backendvanelle@gmail.com', 'Backend Vanelle');

          // Multiple recipient email addresses and names
          // Primary recipients
          $mail->addAddress($email, 'RECIPIENT_NAME_1'); 

          $mail->isHTML(false);
          $mail->Subject = 'Test email';
          $mail->Body = "Voici votre lien de réinitialisation de mot de passe : $resetLink";

          if (!$mail->send()) {
              echo $mail->ErrorInfo;
          } else {
              echo 'nous avons envoyé un lien de réinitialisation de mot de passe 🎉';
          }


        }

      }else {
        echo 'email non trouvé *';
      }

    }
  }

?>