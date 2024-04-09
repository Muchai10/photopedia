<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body> 
    <div class="login-box">
        <div class="logo">
            <img src="mpesa1.png" alt="">
        </div>
        <div class="login-header">
            <header>Enter your details</header>
            <!-- <p>Enter your details</p> -->
        </div>
        <form action="./stkinitiate.php" method="POST">
        <div class="input-box">
            <input type="number" class="input-field" name="amount" id="amount" pattern="\d+" title="Amount should only contain numbers" autocomplete="off" required>
            <label for="fname">Amount</label>
        </div>
        <div class="input-box">
            <input type="number" class="input-field" name="account" id="account" pattern="\d{4,}" title="Account number should only contain numbers"  autocomplete="off" required>
            <label for="lname">Account Number</label>
        </div>
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