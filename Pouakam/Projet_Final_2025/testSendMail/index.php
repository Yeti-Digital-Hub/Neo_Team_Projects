<?php 
  require_once 'db.php'; 
  date_default_timezone_set('Africa/Douala');
  var_dump(date('Y-m-d H:i:s'));
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site web</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h2>Login Form</h2>
    <form method="post">
      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="email" name="email" required>
        <label for="password"><b>Mot de passe</b></label>
        <input type="password" name="password" required>
        <button type="submit">Connexion</button>
      </div>
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Annuler</button>
        <span class="psw"><a href="forgot_password.php">Mot de passe oublié ?</a></span>
      </div>
    </form>
  </body>
</html>

<?php
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['email'], $_POST['password'])) {

      $stmt = $conn->prepare('SELECT password FROM users WHERE email = ?');
      $stmt->execute([ $_POST['email'] ]);

      if($stmt->rowCount() > 0) {

        $hashedPassword = $stmt->fetch()['password'];
        if(password_verify($_POST['password'], $hashedPassword)){

        }else {
          echo "password incorrect *";
        }

      }else {
        echo "email incorrect *";
      }

    }
  }
?>
