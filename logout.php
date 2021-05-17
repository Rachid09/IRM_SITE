 <?php
    session_start();
    if (isset($_SESSION['cne'])) {
        session_unset();
        session_destroy();
        header('location:login.php');
        exit();
    }
