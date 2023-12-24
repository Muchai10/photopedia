<?php
    ini_set("display_errors", "1");
    ini_set("display_startup_errors","1");
    error_reporting(E_ALL);

    include_once "config.php";
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM student WHERE Student_ID ='$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            // echo '<script> alert("Deleted Successful") </script>';
            header('location:../students.php');
        }
        else{
            echo '<script> alert("Connection Error") </script>';
        }
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM food WHERE Food_ID ='$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            // echo '<script> alert("Deleted Successful") </script>';
            header('location:../food.php');
        }
        else{
            echo '<script> alert("Connection Error") </script>';
        }
    }

?>