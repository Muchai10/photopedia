<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
    <?php
        ini_set("display_errors", "1");
        ini_set("display_startup_errors","1");
        error_reporting(E_ALL);

        include("PHP/config.php");
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            date_default_timezone_set('Africa/Nairobi');
            
            // $data=$_post['data'];
            // echo $data;
        }
    
    ?>
</body>
</html>

