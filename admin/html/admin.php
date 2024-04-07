<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signin</title>
</head>
<body>

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
                            header("Location: ../index.php");
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
            <div class="login-box">
                <div class="logo">
                    <img src="Logo.png" alt="">
                </div>
                <div class="login-header">
                    <header>Welcome</header>
                    <p>We are happy to have you back</p>            
                </div>
                <form method="POST">
                <div class="input-box">
                    <input type="email" class="input-field" name="email" id="email" pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" title="Must be a valid email" autocomplete="off" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must be 8 or more characters" autocomplete="off" required>
                    <label for="password">Password</label>
                </div>
                <div class="forgot">
                    <section>
                        <a href="#" class="forgot-link">Forgot password?</a>
                    </section>
                </div>
                <div class="input-box">
                    <input type="submit" name="submit" class="input-submit" value="Sign In" required>
                </div>
                <br>
                <!-- <div class="sign-up">
                    <p>Don't have an account? <a href="register.php">Sign up</a></p>
                </div> -->
                </form>
            </div>
            <?php } ?> 
</body>
</html>
