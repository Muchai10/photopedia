<?php
    ini_set("display_errors", "1");
    ini_set("display_startup_errors","1");
    error_reporting(E_ALL);

    include_once "config.php";
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM client WHERE client_id ='$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            // echo '<script> alert("Deleted Successful") </script>';
            header('location:../clients.php');
        }
        else{
            echo '<script> alert("Connection Error") </script>';
        }
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM business WHERE p_id ='$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            // echo '<script> alert("Deleted Successful") </script>';
            header('location:../businesses.php');
        }
        else{
            echo '<script> alert("Connection Error") </script>';
        }
    }

?>