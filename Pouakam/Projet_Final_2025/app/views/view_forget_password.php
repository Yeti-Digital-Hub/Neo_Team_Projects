<?php
    $title = 'Mot de passe oublié';
    ob_start();
?>
<main class="login-page d-flex align-items-center justify-content-center min-vh-100">

    <section class="login-card">
    <!-- HEADER -->
        <header class="auth-header py-5">
            <h1 class="text-light">Mot de passe oublié ?</h1>
            <p class="auth-subtitle">
                Ne vous inquiéter pas cela peut arriver a n’importe qui 
            </p>
        </header>

        <!-- MESSAGES BACKEND -->
        <section class="px-4 px-md-5 pt-4 pt-md-5">
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
        </section>

        <!-- FORMULAIRE -->
        <section class="px-4 px-md-5">
            <form action="" method="post" autocomplete="off">

                <!-- EMAIL -->
                <div class="form-group mb-3">
                    <label for="email">Email</label>

                    <div class="input-line">
                        <span class="input-icon">
                            <!-- SVG EMAIL -->
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
                        >
                    </div>
                </div>

                <!-- BOUTON -->
                <div class="form-actions mt-5">
                    <button type="submit" class="btn w-100">
                        Recevoir le lien
                    </button>
                </div>

            </form>
        </section>

        <!-- FOOTER -->
        <footer class="register-footer mt-1 px-4 px-md-5 pb-4 p-md-5">
            <p>
                Retour à la page de connexion
                <a href="index.php?action=login">Se connecter</a>
            </p>
        </footer>
    </section>
</main>

<?php 
    $content = ob_get_clean();
    require_once('layout.php');
?>
