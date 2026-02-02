<?php
    $title = 'Mot de passe oublié';
    ob_start();
?>
<main>
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
    <h1>Forget password</h1>
    <section>
        <form action="" method="post" autocomplete="off">
            <div>
                <label for="email-user">Email</label>
                <input type="email" name="email" id="email-user">
            </div><br>
            <button type="submit">Next</button>
        </form><br>
    </section>
    <section><br>
        <p>Please return to the sign-in page <a href="index.php?action=login">here.</a></p>
    </section>
</main>
<?php 
    $content = ob_get_clean();
    require_once('layout.php');
?>
