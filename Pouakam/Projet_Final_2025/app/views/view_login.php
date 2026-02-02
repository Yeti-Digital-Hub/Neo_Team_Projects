<?php 
    $title = "Connexion"; 
    ob_start(); 

    if (isset($_GET['reset']) && $_GET['reset'] === 'success') {
        echo "
            <div class='alert alert-success'>
                Your password has been successfully reset. You can now log in with your new password.
            </div>
            ";
    }

?>
<main>
    <?php if (!empty($error_msg)): ?>
        <div class="alert alert-danger">
            <?= htmlspecialchars_decode($error_msg) ?>
        </div>
    <?php endif; ?>
    <h1>Sign In</h1>
    <section>
        <form action="" method="post" autocomplete="off">
            <div>
                <label for="email-user">Email</label>
                <input type="email" name="email" id="email-user">
            </div><br>
            <div>
                <label for="passwordInputLogin">Password</label>
                <input type="password" name="password" id="passwordInputLogin"><button type="button" id="togglePasswordLogin">👁️</button>
            </div><br>
            <button type="submit">Sign In</button>
        </form><br>
        <p><a href="index.php?action=forget_password">forget password</a></p>
    </section>
    <section><br>
        <p>D’ont have account, create your account here <a href="index.php?action=register">Sign up</a></p>
    </section>
</main>
<script src="assets/js/script_show_password_login.js"></script>
<?php 
    $content = ob_get_clean(); 
    require_once('layout.php'); 
?>