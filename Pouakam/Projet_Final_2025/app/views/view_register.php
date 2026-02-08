<?php
    $title = 'Inscription';
    ob_start();
?>
<main class="login-page d-flex align-items-center justify-content-center min-vh-100">
    <section class="login-card p-4 p-md-5">
        <!-- MESSAGES BACKEND -->
        <?php if (!empty($error_msg)): ?>
            <div class="alert alert-danger" role="alert">
                <?= htmlspecialchars_decode($error_msg) ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($success_msg)): ?>
            <div class="alert alert-success" role="alert">
                <?= htmlspecialchars_decode($success_msg) ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($error_mdp) && $error_mdp[0] == 1): ?>
            <div class="alert alert-danger">
                Mot de passe invalide (majuscule, minuscule, chiffre, caractère spécial). ❌❌
            </div>
        <?php elseif (!empty($error_mdp) && $error_mdp[0] == 2): ?>
            <div class="alert alert-warning">
                Le mot de passe doit contenir au moins 8 caractères ❌.
            </div>
        <?php elseif (!empty($error_mdp) && $error_mdp[0] == 3): ?>
            <div class="alert alert-danger">
                Les deux mots de passe ne correspondent pas ❌❌.
            </div>
        <?php endif; ?>
        <!-- TITRE -->
        <header class="register mb-4">
            <h1 class="text-dark">Inscription</h1>
            <p class="text-muted">Créer un compte</p>
        </header>

        <!-- FORMULAIRE -->
        <form action="" method="post" autocomplete="off" class="login-form mt-4">

            <!-- USERNAME -->
            <div class="mb-3">
                <label for="username">Nom d'utilisateur</label>
                <div class="input-line">
                    <span class="input-icon">
                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.99992 9.99996C11.3011 9.99996 13.1666 8.13448 13.1666 5.83329C13.1666 3.53211 11.3011 1.66663 8.99992 1.66663C6.69873 1.66663 4.83325 3.53211 4.83325 5.83329C4.83325 8.13448 6.69873 9.99996 8.99992 9.99996Z" stroke="#3B3E45" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.1582 18.3333C16.1582 15.1083 12.9499 12.5 8.99988 12.5C5.04988 12.5 1.84155 15.1083 1.84155 18.3333" stroke="#3B3E45" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        required
                        value="<?= !empty($error_mdp) ? htmlspecialchars_decode($error_mdp[1]) : '' ?>"
                    >
                </div>
            </div>

            <!-- EMAIL -->
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
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="exemple@email.com"
                        required
                        value="<?= !empty($error_mdp) ? htmlspecialchars_decode($error_mdp[2]) : '' ?>"
                    >
                </div>
            </div>

            <!-- PASSWORD -->
            <div class="mb-3">
                <label for="passwordInput">Mot de passe</label>
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
                    <input
                        type="password"
                        id="passwordInput"
                        name="password"
                        required
                        value="<?= !empty($error_mdp) ? htmlspecialchars_decode($error_mdp[3]) : '' ?>"
                    >
                    <button type="button" id="togglePassword" class="toggle-password" data-target="password">
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

            <!-- CONFIRM PASSWORD -->
            <div class="mb-4">
                <label for="confirmPasswordInput">Confirmer le mot de passe</label>
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
                    <input
                        type="password"
                        id="confirmPasswordInput"
                        name="confirm-password"
                        required
                        value="<?= !empty($error_mdp) ? htmlspecialchars_decode($error_mdp[4]) : '' ?>"
                    >
                    <button type="button" id="toggleConfirmPassword" class="toggle-password" data-target="confirmPassword">
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

            <!-- BOUTON -->
            <div class="form-actions">
                <button type="submit" class="btn w-100">
                    S’inscrire
                </button>
            </div>

        </form>

        <!-- LIEN LOGIN -->
        <footer class="register-footer mt-4">
            <p>
                Vous avez déjà un compte ?
                <a href="index.php?action=login">Se connecter</a>
            </p>
        </footer>

    </section>

</main>

<script src="assets/js/script_show_password.js"></script>
<?php 
    $content = ob_get_clean();
    require_once('layout.php'); 
?>