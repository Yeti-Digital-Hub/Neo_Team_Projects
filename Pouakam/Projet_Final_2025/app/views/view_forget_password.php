<?php
    $title = 'Mot de passe oublié';
    ob_start();
?>
<main>
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
        <p>Please may you return <a href="index.php?action=login">here</a></p>
    </section>
</main>
<?php 
    $content = ob_get_clean();
    require_once('layout.php');
?>
