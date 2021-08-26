<?php
    // header("Access-Control-Allow-Origin: *");
    // header("Content-Type: application/json; charset=UTF-8");
    // header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';

    $to = "yashveersewparthab@gmail.com";
    $subject = "This is subject";
    
    $message = "<b>This is HTML message.</b>";
    $message .= "<h1>This is headline.</h1>";
    
    $header = "From:abc@somedomain.com \r\n";
    $header .= "Cc:afgh@somedomain.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    
    $retval = mail ($to,$subject,$message,$header);
    
    if( $retval == true ) {
       echo "Message sent successfully...";
    }else {
       echo "Message could not be sent...";
    }

// http://127.0.0.1/projects/etg-world-api-handler/?name=Something

?>

