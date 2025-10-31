<?php
    require('../Debug.php'); //debugage...
    require('actions/users/login_action.php');

    if(isset($_SESSION['auth']))
    {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/head.php'; ?>
    <body>
        <main class="container mt-5">
            <h1 class="text-primary">Sign-in</h1>
            <form method="post" autocomplete="off">
                <div class="mb-3 text-danger">
                    <?php if(isset($errorMsg)){ echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg; } ?>
                </div>
                <div class="mb-3">
                    <label for="pseudo" class="form-label">Pseudo</label>
                    <input type="text" class="form-control" name="user-pseudo" id="pseudo" placeholder="Enter your pseudo">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="user-password" id="pseudo" placeholder="Enter your password" autocomplete="new-password">
                </div>
                <button type="submit" name="validate" class="mb-3 btn btn-primary" title="login">Login</button>
                <a href="sign_up.php"><p>Je n'ai pas de compte, je m'inscis</p></a>
            </form>
        </main>
    </body>
</html>