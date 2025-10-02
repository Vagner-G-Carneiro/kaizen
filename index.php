<?php
    session_start();

    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {

        header('Location: /kaizen/view/principal.view.php');
        exit;
        
    } else {
        
        header('Location: /kaizen/view/login.view.php');
        exit;
        
    }
?>