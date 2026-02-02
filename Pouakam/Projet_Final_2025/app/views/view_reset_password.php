<?php 
    $title = "Reset Password"; 
    ob_start(); 
?>
    <section>
        <?php if (!empty($error_msg)): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars_decode($error_msg) ?>
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
    <h2>Nouveau mot de passe</h2>
    <form method="post">
        <div>
            <label for="passwordInput">Password</label>
            <input type="password" id="passwordInput" name="password" value="<?php if (!empty($error_mdp)){ echo htmlspecialchars_decode($error_mdp['1']);} ?>"><button type="button" id="togglePassword">👁️</button>
        </div><br>
        <div>
            <label for="confirmPasswordInput">Confirm Password</label>
            <input type="password" id="confirmPasswordInput" name="confirm_password" value="<?php if (!empty($error_mdp)){ echo htmlspecialchars_decode($error_mdp['2']);} ?>"><button type="button" id="toggleConfirmPassword">👁️</button>
        </div><br>

        <button type="submit">Réinitialiser</button>
    </form>
    <script src="assets/js/script_show_password.js"></script>
<?php 
    $content = ob_get_clean(); 
    require_once('layout.php'); 
?>