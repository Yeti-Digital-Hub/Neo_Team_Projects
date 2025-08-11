<?php
    session_start();

    require_once('../Debug.php');

    // Si l'utilisateur est déjà connecté, on le redirige
    if (isset($_SESSION['email_login'])) 
    {
        header('Location: dashboard_user.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <!-- importation de la biliothèque font-awersomes...-->
        <link rel="stylesheet" href="assets/icons/css/all.min.css">
        <link rel="stylesheet" href="files_style/style-index.css?v=1.1">
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
                if(isset($_GET['error-1']))
                {
                    echo '<strong><i class="fa-solid fa-triangle-exclamation"></i>'.htmlspecialchars($_GET['error-1']).'</strong>';
                }
                if(isset($_GET['error-2']))
                {
                    echo '<strong><i class="fa-solid fa-triangle-exclamation"></i>'.htmlspecialchars($_GET['error-2']).'</strong>';
                }
                if(isset($_GET['error-3']))
                {
                    echo '<strong><i class="fa-solid fa-triangle-exclamation"></i>'.htmlspecialchars($_GET['error-3']).'</strong>';
                }
        ?>
        <main>
            <div class="main-gauche">
                <h1>Welcome to Login Gitlab</h1>
                <form action="#" method="post" autocomplete="off">
                    <div class="input-wrapper" id="">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email-login" placeholder="Enter your email" autocomplete="off"/>
                    </div>  
                    <div class="input-wrapper">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password-login" placeholder="Enter your password" autocomplete="new-password"/>
                    </div>
                    <a href="forget_password.php">Forget password ?</a><br>
                    <button type="submit" name="btn-login">Login</button>    
                </form>
            </div>
            <div class="main-droite">
                <p>Every new project is a new adventure. <br><span>Let's get connected</span></p>
            </div>
        </main>
    </body>
</html>