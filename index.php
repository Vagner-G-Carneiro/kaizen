<?php
    session_start();

    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {

        header('Location: /kaizen/controller/principal.controller.php');
        exit;
        
    } else {
        
        header('Location: /kaizen/controller/login.controller.php');
        exit;
        
    }
?>