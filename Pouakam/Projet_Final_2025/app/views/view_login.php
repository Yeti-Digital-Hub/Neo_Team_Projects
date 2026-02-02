<?php 
    $title = "Connexion"; 
    ob_start(); 

?>
<main class="login-page d-flex align-items-center justify-content-center min-vh-100">
    <!-- main content of login -->
    <section class="p-4 p-md-5 login-card">
        <?php 
            if (isset($_GET['reset']) && $_GET['reset'] === 'success') {
                echo "
                    <div class='alert alert-success'>
                        Votre mot de passe a été réinitialisé avec succès. Vous pouvez maintenant vous connecter avec votre nouveau mot de passe. ✅✅
                    </div>
                    ";
            }
        ?>
        <!-- title login -->
        <header class="login-header mt-0 mb-4">
            <h1 class="text-dark">Connexion</h1>
        </header>
        <!-- error message (backend) -->
        <?php if (!empty($error_msg)): ?>
            <div class="alert alert-danger" role="alert">
                <?= htmlspecialchars_decode($error_msg) ?>
            </div>
        <?php endif; ?>

        <!-- Form of login-->
        <form action="" method="post" autocomplete="off" class="login-form">
            <!-- field email -->
            <div class="mb-3">
                <label for="email">Email</label>
                <div class="input-line">
                    <span class="input-icon">
                        <!-- SVG email -->
                        <svg width="23" height="24" viewBox="0 0 23 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 12.98V15.5C21 19 19 20.5 16 20.5H6C3 20.5 1 19 1 15.5V8.5C1 5 3 3.5 6 3.5H16C19 3.5 21 5 21 8.5"
                                stroke="#3B3E45" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M16 9L12.87 11.5C11.84 12.32 10.15 12.32 9.12 11.5L6 9"
                                stroke="#3B3E45" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <input type="email" name="email" id="email" placeholder="exemple@email.com" required>
                </div>
            </div>
            <!-- field password -->
            <div class="mb-3">
                <label for="password">Mot de passe</label>
                <div class="input-line">
                    <span class="input-icon">
                        <!-- SVG password -->
                        <svg width="23" height="24" viewBox="0 0 23 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 8.33329V6.66663C6 3.90829 6.83333 1.66663 11 1.66663C15.1667 1.66663 16 3.90829 16 6.66663V8.33329"
                                stroke="#3B3E45" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M15.1667 18.3334H6.83341C3.50008 18.3334 2.66675 17.5 2.66675 14.1667V12.5C2.66675 9.16671 3.50008 8.33337 6.83341 8.33337H15.1667C18.5001 8.33337 19.3334 9.16671 19.3334 12.5V14.1667C19.3334 17.5 18.5001 18.3334 15.1667 18.3334Z"
                                stroke="#3B3E45" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M14.3303 13.3333H14.3378" stroke="#3B3E45"
                                stroke-width="2" stroke-linecap="round"/>
                            <path d="M10.9963 13.3333H11.0038" stroke="#3B3E45"
                                stroke-width="2" stroke-linecap="round"/>
                            <path d="M7.66209 13.3333H7.66957" stroke="#3B3E45"
                                stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </span>
                    <input type="password" id="passwordInputLogin" name="password" required>
                    <button type="button" id="togglePasswordLogin" class="toggle-password" aria-label="Afficher le mot de passe">
                        <!-- SVG oeil -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9833 12.0001C14.9833 13.6501 13.6499 14.9834 11.9999 14.9834C10.3499 14.9834 9.0166 13.6501 9.0166 12.0001C9.0166 10.3501 10.3499 9.01672 11.9999 9.01672C13.6499 9.01672 14.9833 10.3501 14.9833 12.0001Z"
                                stroke="#3B3E45" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M11.9999 18.8916C14.9415 18.8916 17.6832 17.1583 19.5915 14.1583C20.3415 12.9833 20.3415 11.0083 19.5915 9.83331C17.6832 6.83331 14.9415 5.09998 11.9999 5.09998C9.0582 5.09998 6.31654 6.83331 4.4082 9.83331C3.6582 11.0083 3.6582 12.9833 4.4082 14.1583C6.31654 17.1583 9.0582 18.8916 11.9999 18.8916Z"
                                stroke="#3B3E45" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- btn of login -->
            <div class="form-actions mt-5">
                <button type="submit" class="btn w-100">
                    Se connecter
                </button>
            </div>
        </form>

        <!-- link forget password -->
        <div class="forgot-password my-3 text-center">
            <a href="index.php?action=forget_password">
                Mot de passe oublié ?
            </a>
        </div>

        <!-- link inscripttion -->
        <footer class="login-footer">
            <div class="footer-content">

                <!-- Texte -->
                <div class="footer-text">
                    <p>Pas encore de compte</p>
                    <p>Créer votre compte ici</p>
                    <a href="index.php?action=register" class="register-link">
                        Inscription
                    </a>
                </div>

            </div>
        </footer>

    </section>

</main>
<script src="assets/js/script_show_password_login.js"></script>
<?php 
    $content = ob_get_clean(); 
    require_once('layout.php'); 
?>