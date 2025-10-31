<?php
    session_start();
    session_unset();
    session_destroy();

    // Évite que le navigateur garde en cache
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Expires: 0");
    header("Pragma: no-cache");

    header("Location: index.php");
    exit;

