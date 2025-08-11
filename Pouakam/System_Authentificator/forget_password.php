<?php
    session_start();

    require_once('../Debug.php');
    
    // Si l'utilisateur est déjà connecté, on le redirige
    if (isset($_SESSION['email_login'])) {
        header('Location: dashboard_user.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password forget</title>
    <link rel="stylesheet" href="assets/icons/css/all.min.css">
    <link rel="stylesheet" href="files_style/style-forget-password.css?v=1.3">
</head>
<body>
    <header class="header">
        <div class="card-name-site">
            <div class="avatar">G</div>
            <div class="name-site">Gitlab</div>
        </div>
        <div class="logo-site">
            <i class="fa-brands fa-gitlab"></i>
        </div>
    </header>
    <?php
        require_once('includes/auth_main.php');

        // messages d'erreurs
        if(isset($_GET['error-4']))
        {
            echo '<strong><i class="fa-solid fa-triangle-exclamation"></i>'.htmlspecialchars($_GET['error-4']).'</strong>';
        }
        if(isset($_GET['error-5']))
        {
            echo '<strong><i class="fa-solid fa-triangle-exclamation"></i>'.htmlspecialchars($_GET['error-5']).'</strong>';
        }
        if(isset($_GET['error-6']))
        {
            echo '<strong><i class="fa-solid fa-triangle-exclamation"></i>'.htmlspecialchars($_GET['error-6']).'</strong>';
        }
        if(isset($_GET['expire_token']))
        {
            echo '<strong><i class="fa-solid fa-triangle-exclamation"></i>'.htmlspecialchars($_GET['expire_token']).'</strong>';
        }
    ?>
    <main>
        <div class="title">
            <h1 class="title-forget-password">Forget password?</h1>
            <h3 class="sous-title-forget-password">Remember your password? <a href="#">Login here</a></h3>
        </div>
        <div class="form-forget-password">
            <form action="" method="post" autocomplete="off">
                <label for="email-forget">Email address :</label>
                <div class="card-input">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email-forget" placeholder="Enter your email" autocomplete="off">
                </div>
                <div class="card-btn">
                    <button type="submit" name="btn-forget">Next</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>