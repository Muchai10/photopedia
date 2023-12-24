<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/registration.css">
    <title>Signin</title>
</head>
<body>
    <div class="container">
        <div class="box formbox">

            <?php
                include("PHP/config.php");
                if(isset($_POST['submit'])){
                    $id = mysqli_real_escape_string($conn,$_POST['Admin_ID']);
                    $password = mysqli_real_escape_string($conn,$_POST['Password']);

                    $passwordmd5 = md5($password);
                    $result = mysqli_query($conn, "SELECT * FROM admin WHERE Admin_ID='$id'") or die("Select Error");
                    
                    
                    if(mysqli_num_rows($result) !=0){
                        $row = mysqli_fetch_assoc($result);
                        if($passwordmd5 == $row['Password']){
                            $_SESSION['Admin_ID'] = $row['Admin_ID'];
                            header("Location: index.php");
                        }

                        else{
                            echo "<div class='message'>
                                    <p>Wrong Password</p>  
                                  </div> <br>";
                            echo "<a href='admin.php'><button class = 'btn'>Go Back</button>";
                        }
                    }
                
                
                    else{
                        // echo "<div class='message'>
                        //             <p>User Not Registered</p>  
                        //           </div> <br>";
                        // echo "<a href='register.php'><button class = 'btn'>Register</button>";
                    }
                
                
                } else{

            ?>
            <div class="nav">
                <div class="logo">
                    <img src="../assets/img/avatars/logo.png" alt="">
                </div>
            </div>
            <!-- <header>Sign In</header> -->
            <header>AFRICA NAZARENE UNIVERSITY: <br> CAFETERIA SYSTEM</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="Admin_ID">Username</label>
                    <input type="text" name="Admin_ID" id="Admin_ID" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Password">Password</label>
                    <input type="password" name="Password" id="Password"  autocomplete="off"  required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Sign In" required>
                    
                </div>
                <br>
                
            </form>
        </div>
    </div>   
    <?php } ?>
</body>
</html>
