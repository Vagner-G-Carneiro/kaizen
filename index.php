<?php
    session_start();

    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {

        header('Location: /KaizenTESTE/view/principal.view.php');
        exit;
        
    } else {
        
        header('Location: /KaizenTESTE/view/login.view.php');
        exit;
        
    }
?>