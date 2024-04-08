<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
    <?php
        // ini_set("display_errors", "1");
        // ini_set("display_startup_errors","1");
        // error_reporting(E_ALL);

        // include("PHP/config.php");
        // if($_SERVER['REQUEST_METHOD'] == "POST"){
        //     date_default_timezone_set('Africa/Nairobi');
            
        //     $data=$_post['data'];
        //     echo $data;
        // }
 		header("Content-Type: application/json");

        $response = '{
            "ResultCode": 0, 
            "ResultDesc": "Confirmation Received Successfully"
        }';
    
        // DATA
        $mpesaResponse = file_get_contents('php://input');
    
        // log the response
        $logFile = "M_PESAConfirmationResponse.txt";
    
        // write to file
        $log = fopen($logFile, "a");
    
        fwrite($log, $mpesaResponse);
        fclose($log);
    
        echo $response;
        
    ?>
</body>
</html>

