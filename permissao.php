<?php
    
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
        header('Location: /KaizenTESTE/view/login.view.php');
        exit;
    }
    
?>