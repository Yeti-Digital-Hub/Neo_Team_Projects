<?php
    $title = 'Inscription';
    ob_start();
?>
<main>
    <section>
        <?php if (!empty($error_msg)): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars_decode($error_msg) ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($success_msg)): ?>
                <div class="alert alert-success">
                    <?= htmlspecialchars_decode($success_msg) ?>
                </div>
        <?php endif; ?>
        <?php if (!empty($error_mdp) && $error_mdp['0'] == 1): ?>
                <div class="alert alert-danger">
                    Votre mot de passe doit contenir au moins une majuscle, une minuscle, un chiffre et caractère spécial. *
                </div>
        <?php elseif (!empty($error_mdp) && $error_mdp['0'] == 2): ?>
                <div class="alert alert-warning">
                    votre mot de passe doit avoir au moins 8 caractères !
                </div>
        <?php elseif (!empty($error_mdp) && $error_mdp['0'] == 3): ?>
                <div class="alert alert-danger">
                    Les deux mots de passe entrés ne correspondent pas. *
                </div>
        <?php endif; ?>
    </section>
    <section>
        <h1>Register</h1>
        <p>create a account</p>
    </section>
    <section>
        <form action="" method="post">
            <div>
                <label for="name-user">User Name</label>
                <input type="text" id="name-user" name="username" value="<?php if (!empty($error_mdp)){ echo htmlspecialchars_decode($error_mdp['1']);} ?>">
            </div><br>
            <div>
                <label for="email-user">Email</label>
                <input type="email" id="email-user" name="email" value="<?php if (!empty($error_mdp)){ echo htmlspecialchars_decode($error_mdp['2']);} ?>">
            </div><br>
            <div>
                <label for="passwordInput">Password</label>
                <input type="password" id="passwordInput" name="password" value="<?php if (!empty($error_mdp)){ echo htmlspecialchars_decode($error_mdp['3']);} ?>"><button type="button" id="togglePassword">👁️</button>
            </div><br>
            <div>
                <label for="confirmPasswordInput">Confirm Password</label>
                <input type="password" id="confirmPasswordInput" name="confirm-password" value="<?php if (!empty($error_mdp)){ echo htmlspecialchars_decode($error_mdp['4']);} ?>"><button type="button" id="toggleConfirmPassword">👁️</button>
            </div><br>
            <button type="submit">Sign up</button>
        </form>
    </section><br>
    <section>
        <p>You have already a account ? <a href="index.php?action=login">Sign in</a></p>
    </section>
</main>
<script src="assets/js/script_show_password.js"></script>
<?php 
    $content = ob_get_clean();
    require_once('layout.php'); 
?>