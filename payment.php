<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body> 
    <?php 
            ini_set("display_errors", "1");
            ini_set("display_startup_errors","1");
            error_reporting(E_ALL);

            include("PHP/config.php");
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                date_default_timezone_set('Africa/Nairobi');

                # access token
                $consumerKey = "GUQn0lRxhQdBTgU1gbiJ7zGMs7cXiAaSbqdAwdgyPCrUADSH"; //Fill with your app Consumer Key
                $consumerSecret = "TP6MfjciHG2zAvirNmG6BkhYZ9mD21yTxnAG9AllXC3AZXoBdJeqweNirbLYIPhz"; // Fill with your app Secret

                # define the variales
                # provide the following details, this part is found on your test credentials on the developer account
                $BusinessShortCode = '174379';
                $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';

                /*
                    This are your info, for
                    $PartyA should be the ACTUAL clients phone number or your phone number, format 2547****
                    $AccountRefference, it maybe invoice number, account number etc on production systems, but for test just put anything
                    TransactionDesc can be anything, probably a better description of or the transaction
                    $Amount this is the total invoiced amount, Any amount here will be 
                    actually deducted from a clients side/your test phone number once the PIN has been entered to authorize the transaction. 
                    for developer/test accounts, this money will be reversed automatically by midnight.
                */

                $PartyA = $_POST['phone']; // This is your phone number, 
                $AccountReference = '2255';
                $TransactionDesc = 'Test Payment';
                $Amount = $_POST['amount'];

                # Get the timestamp, format YYYYmmddhms -> 20181004151020
                $Timestamp = date('YmdHis');

                # Get the base64 encoded string -> $password. The passkey is the M-PESA Public Key
                $Password = base64_encode($BusinessShortCode . $Passkey . $Timestamp);

                # header for access token
                $headers = ['Content-Type:application/json; charset=utf8'];

                # M-PESA endpoint urls
                $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
                $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

                # callback url
                $CallBackURL = ' https://eb83-105-161-29-185.ngrok-free.app/photopedia/mpesa_callback.php';

                $curl = curl_init($access_token_url);
                curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($curl, CURLOPT_HEADER, FALSE);
                curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);
                $result = curl_exec($curl);
                $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                $result = json_decode($result);
                $access_token = $result->access_token;
                curl_close($curl);

                

                # header for stk push
                $stkheader = ['Content-Type:application/json', 'Authorization:Bearer ' . $access_token];

                # initiating the transaction
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $initiate_url);
                curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header

                $curl_post_data = array(
                    //Fill in the request parameters with valid values
                    'BusinessShortCode' => $BusinessShortCode,
                    'Password' => $Password,
                    'Timestamp' => $Timestamp,
                    'TransactionType' => 'CustomerPayBillOnline',
                    'Amount' => $Amount,
                    'PartyA' => $PartyA,
                    'PartyB' => $BusinessShortCode,
                    'PhoneNumber' => $PartyA,
                    'CallBackURL' => $CallBackURL,
                    'AccountReference' => $AccountReference,
                    'TransactionDesc' => $TransactionDesc
                );

                $data_string = json_encode($curl_post_data);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
                $curl_response = curl_exec($curl);
                print_r($curl_response);

                echo $curl_response;
            }
            //     $fname = mysqli_real_escape_string($conn,$_POST['fname']); 
            //     $lname = mysqli_real_escape_string($conn,$_POST['lname']);
            //     $email = mysqli_real_escape_string($conn,$_POST['email']);
            //     $phone = mysqli_real_escape_string($conn,$_POST['phone']);
            //     $password = mysqli_real_escape_string($conn,$_POST['password']);
            //     $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);          
            //     $verify_query = mysqli_query($conn,"SELECT * FROM client WHERE email ='$email'");

            //     $passwordmd5 = md5($password);
            //     $cpasswordmd5 = md5($cpassword);

            //     if(mysqli_num_rows($verify_query) !=0){
            //     echo "<div class='login-box'>
            //     <div class='login-header'>
            //             <header>Email has already been taken, Try another One Please</header>
            //         </div> <br>";
            //     echo "<a href='javascript:self.history.back()'><div class='input-box'>
            //     <input type='submit' class='input-submit' value='Go Back'>
            //     </div></div>";
            //     }  
                     
            //     else{
            //         if($passwordmd5 != $cpasswordmd5){
            //             echo "<div class='login-box'>
            //             <div class='login-header'>
            //                     <header>Password Does Not Match</header>
            //                 </div>";
            //             echo "<a href='javascript:self.history.back()'><div class='input-box'>
            //             <input type='submit' class='input-submit' value='Go Back'>
            //         </div></div>";
            //         }
            //         else{                    
            //         $sql =  "INSERT INTO client (fname,lname,email,phone,password,cpassword) VALUES('$fname','$lname','$email','$phone','$passwordmd5','$cpasswordmd5')";
            //             mysqli_query($conn, $sql);
            //             echo "<div class='login-box'>
            //             <div class='login-header'>
            //             <header>Registration Successful!</header>
            //             </div>";
            //             echo "<a href='signin.php'><div class='input-box'>
            //             <input type='submit' class='input-submit' value='Sign In'>
            //         </div></div>";
            //         }      
            //     }
    
            // }
            //else { 
        ?>
    <div class="login-box">
        <div class="logo">
            <img src="mpesa1.png" alt="">
        </div>
        <div class="login-header">
            <header>Enter your details</header>
            <!-- <p>Enter your details</p> -->
        </div>
        <form method="POST">
        <div class="input-box">
            <input type="number" class="input-field" name="amount" id="amount" pattern="" title="Amount should only contain numbers" step="1" autocomplete="off" required>
            <label for="fname">Amount</label>
        </div>
        <!-- <div class="input-box">
            <input type="number" class="input-field" name="account" id="account" pattern="" title="Account number should only contain numbers"  step="1" autocomplete="off" required>
            <label for="lname">Account Number</label>
        </div> -->
        <div class="input-box">
            <input type="tel" class="input-field" name="phone" id="phone" pattern="^\+?\d{10,13}" title="Phone Number (Format: +254 700 000000)" autocomplete="off" required>
            <label for="phone">Phone Number</label>
        </div>
        <div class="input-box">
            <input type="submit" name="submit" id="submit" class="input-submit" value="Pay" required>
        </div>
        <br>
        <!-- <div class="sign-up">
            <p>Already have an account? <a href="signin.php">Log In</a></p>
        </div> -->
        </form>
    </div>
    <?php //} ?> 
</body>
</html>