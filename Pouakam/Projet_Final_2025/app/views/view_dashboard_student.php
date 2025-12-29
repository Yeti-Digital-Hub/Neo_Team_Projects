<?php
    $title = 'Tableau de bord étudiant';
    ob_start();
?>
<?php 
    $content = ob_get_clean();
    require_once('layout.php');
?>
