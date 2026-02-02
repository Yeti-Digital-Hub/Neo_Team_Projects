<?php

    session_start();

    require_once('../Debug.php');
    require_once('../app/config/function_project.php');
    require_once('../app/controllers/controller_login.php');
    require_once('../app/controllers/controller_register.php');
    require_once('../app/controllers/controller_dashboard_student.php');
    require_once('../app/controllers/controller_forget_password.php');
    require_once('../app/controllers/controller_reset_password.php');
    
    $action = $_GET['action'] ?? 'login';

    /**
     * routing operation (routeur)
     *
     * @var string $action recover the GET param URL (user action)
     */
    switch($action) {
        case 'login' :
            login();
            break;
        case 'register' :
            register();
            break;
        case 'dashboard_student' :
            dashboard_student();
            break;
        case 'forget_password' :
            forget_password();
            break;
        case 'reset_password' :
            reset_password();
            break;
        default :
            echo "Page introuvable";
    }
    
