<?php
    $title = 'Mot de passe oublié';
    ob_start();
?>
<?php 
    $content = ob_get_clean();
    require_once('layout.php');
?>
