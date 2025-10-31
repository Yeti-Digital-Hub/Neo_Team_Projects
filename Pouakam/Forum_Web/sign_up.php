<?php

    require('../Debug.php'); //debugage...
    require('actions/users/sign_up_action.php'); // logique d'inscription
    
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
            <h1 class="text-primary">Register</h1>
            <form method="post" autocomplete="off">
                <div class="mb-3 text-danger">
                    <?php if(isset($errorMsg)){ echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg; } ?>
                </div>
                <div class="mb-3">
                    <label for="pseudo" class="form-label">Pseudo</label>
                    <input type="text" class="form-control" name="user-pseudo" id="pseudo" placeholder="Enter your pseudo">
                </div>
                <div class="mb-3">
                    <label for="nom" class="form-label">Name</label>
                    <input type="text" class="form-control" name="user-name" id="nom" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Surname</label>
                    <input type="text" class="form-control" name="user-surname" id="prenom" placeholder="Enter your surname">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="user-password" id="pseudo" placeholder="Enter your password" autocomplete="new-password">
                </div>
                <button type="submit" name="validate" class="mb-3 btn btn-primary" title="sign-up">Sign up</button>
                <a href="login.php"><p>J'ai déjà un compte, je me connecte</p></a>
            </form>
        </main>
    </body>
</html>