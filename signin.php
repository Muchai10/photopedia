<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
            <?php
                ini_set("display_errors", "1");
                ini_set("display_startup_errors","1");
                error_reporting(E_ALL);
                
                include("PHP/config.php");
                if(isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($conn,$_POST['email']);
                    $password = mysqli_real_escape_string($conn,$_POST['password']);

                    $passwordmd5 = md5($password);
                    $result = mysqli_query($conn, "SELECT * FROM client WHERE email='$email'") or die("Select Error");
                    
                    
                    if(mysqli_num_rows($result) !=0){
                        $row = mysqli_fetch_assoc($result);
                        if($passwordmd5 == $row['password']){
                            $_SESSION['email'] = $row['email'];
                            header("Location: homepage.php");
                        }

                        else{
                            echo "<div class='login-box'>
                                <div class='login-header'>
                                    <header>Wrong Password</header>  
                                  </div>";
                            echo "<a href='signin.php'><div class='input-box'>
                            <input type='submit' class='input-submit' value='Go Back'>
                        </div></div>";
                        }
                    }
                
                
                    else{
                        echo "<div class='login-box'>
                            <div class='login-header'>
                                    <header>User Not Registered</header>  
                                  </div>";
                        echo "<a href='register.php'><div class='input-box'>
                        <input type='submit' class='input-submit' value='Register'>
                    </div></div>";
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
        <div class="sign-up">
            <p>Don't have an account? <a href="register.php">Sign up</a></p>
        </div>
        </form>
    </div>
    <?php } ?> 
</body>
</html>