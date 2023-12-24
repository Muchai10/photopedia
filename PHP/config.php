<?php
    //ini_set("display_errors", "1");
    //ini_set("display_startup_errors","1");
    //error_reporting(E_ALL);

    $conn = mysqli_connect('localhost', 'administrator', '', 'photopedia');

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
    // else{
    //     echo 'Connected!';
    // }
?>