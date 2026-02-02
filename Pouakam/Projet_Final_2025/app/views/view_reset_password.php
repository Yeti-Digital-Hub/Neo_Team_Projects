<?php 
    $title = "Reset Password"; 
    ob_start(); 
?>
<main class="login-page d-flex align-items-center justify-content-center min-vh-100">

    <section class="login-card">
        <!-- HEADER -->
        <header class="auth-header py-5">
            <h1 class="auth-title">Réinitialiser le mot de passe</h1>
            <p class="auth-subtitle">
                Veuillez définir un nouveau mot de passe sécurisé
            </p>
        </header>

        <!-- MESSAGES BACKEND -->
        <section class="px-4 px-md-5 pt-4 pt-md-5">
            <?php if (!empty($error_msg)): ?>
                <div class="alert alert-danger">
                    <?= htmlspecialchars_decode($error_msg) ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($error_mdp) && $error_mdp[0] == 1): ?>
                <div class="alert alert-danger">
                    Votre mot de passe doit contenir une majuscule, une minuscule,
                    un chiffre et un caractère spécial.
                </div>
            <?php elseif (!empty($error_mdp) && $error_mdp[0] == 2): ?>
                <div class="alert alert-warning">
                    Le mot de passe doit contenir au moins 8 caractères.
                </div>
            <?php elseif (!empty($error_mdp) && $error_mdp[0] == 3): ?>
                <div class="alert alert-danger">
                    Les deux mots de passe ne correspondent pas.
                </div>
            <?php endif; ?>
        </section>

        <!-- FORMULAIRE -->
        <section class="px-4 px-md-5">
            <form method="post" class="auth-form">

                <!-- PASSWORD -->
                <div class="form-group mb-5">
                    <label for="passwordInput">Nouveau mot de passe</label>

                    <div class="input-line">
                        <span class="icon">
                            <!-- SVG PASSWORD -->
                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 8.33329V6.66663C6 3.90829 6.83333 1.66663 11 1.66663C15.1667 1.66663 16 3.90829 16 6.66663V8.33329"
                                    stroke="#3B3E45" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M15.1667 18.3334H6.83341C3.50008 18.3334 2.66675 17.5 2.66675 14.1667V12.5C2.66675 9.16671 3.50008 8.33337 6.83341 8.33337H15.1667C18.5001 8.33337 19.3334 9.16671 19.3334 12.5V14.1667C19.3334 17.5 18.5001 18.3334 15.1667 18.3334Z"
                                    stroke="#3B3E45" stroke-width="1.5"/>
                            </svg>
                        </span>

                        <input
                            type="password"
                            id="passwordInput"
                            name="password"
                            required
                            value="<?php if (!empty($error_mdp)) echo htmlspecialchars_decode($error_mdp[1]); ?>"
                        >

                        <button
                            type="button"
                            class="toggle-password"
                            id="togglePassword"
                            aria-label="Afficher le mot de passe"
                        >
                            <!-- SVG OEIL -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                    stroke="#3B3E45" stroke-width="1.5"/>
                                <path d="M21 12s-3.6-7-9-7-9 7-9 7 3.6 7 9 7 9-7 9-7Z"
                                    stroke="#3B3E45" stroke-width="1.5"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- CONFIRM PASSWORD -->
                <div class="form-group">
                    <label for="confirmPasswordInput">Confirmer le mot de passe</label>

                    <div class="input-line">
                        <span class="icon">
                            <!-- SVG CONFIRM PASSWORD -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.4899 2.23006L5.49991 4.11006C4.34991 4.54006 3.40991 5.90006 3.40991 7.12006V14.5501C3.40991 15.7301 4.18991 17.2801 5.13991 17.9901L9.43991 21.2001C10.8499 22.2601 13.1699 22.2601 14.5799 21.2001L18.8799 17.9901C19.8299 17.2801 20.6099 15.7301 20.6099 14.5501V7.12006C20.6099 5.89006 19.6699 4.53006 18.5199 4.10006L13.5299 2.23006C12.6799 1.92006 11.3199 1.92006 10.4899 2.23006Z" stroke="#3B3E45" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.05005 11.8699L10.66 13.4799L14.96 9.17993" stroke="#3B3E45" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>

                        <input
                            type="password"
                            id="confirmPasswordInput"
                            name="confirm_password"
                            required
                            value="<?php if (!empty($error_mdp)) echo htmlspecialchars_decode($error_mdp[2]); ?>"
                        >

                        <button
                            type="button"
                            class="toggle-password"
                            id="toggleConfirmPassword"
                            aria-label="Afficher le mot de passe"
                        >
                            <!-- SVG OEIL -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                    stroke="#3B3E45" stroke-width="1.5"/>
                                <path d="M21 12s-3.6-7-9-7-9 7-9 7 3.6 7 9 7 9-7 9-7Z"
                                    stroke="#3B3E45" stroke-width="1.5"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- BOUTON -->
                <div class="form-actions my-5">
                    <button type="submit" class="btn w-100">
                        Soumettre
                    </button>
                </div>

            </form>
        </section>
    </section>

</main>
<script src="assets/js/script_show_password.js"></script>
<?php 
    $content = ob_get_clean(); 
    require_once('layout.php'); 
?>