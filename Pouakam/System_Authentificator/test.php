<?php
$emailError = "";
$emailValue = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailValue = $_POST["email"];
    if (!filter_var($emailValue, FILTER_VALIDATE_EMAIL)) {
        $emailError = "email-invalid";
    }
}
?>

<form method="post">
    <input type="text" name="email" value="<?= htmlspecialchars($emailValue) ?>"
        class="<?= $emailError ?>">
    <input type="submit" value="Envoyer">
</form>

<style>
    input.email-invalid {
        border: 2px solid red;
        
    }
</style>
