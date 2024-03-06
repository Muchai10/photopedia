<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
            ini_set("display_errors", "1");
            ini_set("display_startup_errors","1");
            error_reporting(E_ALL);

            include("PHP/config.php");
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $fname = mysqli_real_escape_string($conn,$_POST['fname']); 
                $lname = mysqli_real_escape_string($conn,$_POST['lname']);
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $phone = mysqli_real_escape_string($conn,$_POST['phone']);
                $password = mysqli_real_escape_string($conn,$_POST['password']);
                $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);          
                $verify_query = mysqli_query($conn,"SELECT * FROM client WHERE email ='$email'");

                $passwordmd5 = md5($password);
                $cpasswordmd5 = md5($cpassword);

                if(mysqli_num_rows($verify_query) !=0){
                echo "<div class='login-box'>
                <div class='login-header'>
                        <header>Email has already been taken, Try another One Please</header>
                    </div> <br>";
                echo "<a href='javascript:self.history.back()'><div class='input-box'>
                <input type='submit' class='input-submit' value='Go Back'>
                </div></div>";
                }  
                     
                else{
                    if($passwordmd5 != $cpasswordmd5){
                        echo "<div class='login-box'>
                        <div class='login-header'>
                                <header>Password Does Not Match</header>
                            </div>";
                        echo "<a href='javascript:self.history.back()'><div class='input-box'>
                        <input type='submit' class='input-submit' value='Go Back'>
                    </div></div>";
                    }
                    else{                    
                    $sql =  "INSERT INTO client (fname,lname,email,phone,password,cpassword) VALUES('$fname','$lname','$email','$phone','$passwordmd5','$cpasswordmd5')";
                        mysqli_query($conn, $sql);
                        echo "<div class='login-box'>
                        <div class='login-header'>
                        <header>Registration Successful!</header>
                        </div>";
                        echo "<a href='signin.php'><div class='input-box'>
                        <input type='submit' class='input-submit' value='Sign In'>
                    </div></div>";
                    }      
                }
    
            }
            else { 
        ?>
    <div class="login-box">
        <div class="logo">
            <img src="Logo.png" alt="">
        </div>
        <div class="login-header">
            <header>Register</header>
            <p>Create a new account</p>            
        </div>
        <form method="POST">
        <div class="input-box">
            <input type="text" class="input-field" name="fname" id="fname" pattern="[A-Za-z]+" title="Name should only contain letters" autocomplete="off" required>
            <label for="fname">First Name</label>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" name="lname" id="lname" pattern="[A-Za-z]+" title="Name should only contain letters"  autocomplete="off" required>
            <label for="lname">Last Name</label>
        </div>
        <div class="input-box">
            <input type="email" class="input-field" name="email" id="email" pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" title="Must be a valid email" autocomplete="off" required>
            <label for="email">Email</label>
        </div>
        <div class="input-box">
            <input type="tel" class="input-field" name="phone" id="phone" pattern="^\+?\d{10,13}" title="Phone Number (Format: +254 700 000000)" autocomplete="off" required>
            <label for="phone">Phone Number</label>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must be 8 or more characters" autocomplete="off" required>
            <label for="password">Password</label>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" name="cpassword" id="cpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must be 8 or more characters" autocomplete="off" required>
            <label for="cpassword">Confirm Password</label>
        </div>
        <div class="input-box">
            <input type="submit" name="submit" id="submit" class="input-submit" value="Sign Up" required>
        </div>
        <br>
        <div class="sign-up">
            <p>Already have an account? <a href="signin.php">Log In</a></p>
        </div>
        </form>
    </div>
    <?php } ?> 
</body>
</html>