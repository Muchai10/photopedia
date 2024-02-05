<?php
ini_set("display_errors", "1");
ini_set("display_startup_errors","1");
error_reporting(E_ALL);

session_start();

if (!function_exists('logged_in')) {
    function logged_in() {
        error_log('sessionid: ' . $_SESSION['email']);
        return isset($_SESSION['email']);
    }
}

if(!function_exists('confirm_logged_in')){
    function confirm_logged_in() {
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {
        // User is logged in
        return true;
    } else {
        // User is not logged in
        header('Location: signin.php'); // Redirect to signin page
        exit();
    }
}

}



?>