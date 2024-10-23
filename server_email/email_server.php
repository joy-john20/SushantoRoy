<?php
include "phpmailer/mail.php";
$request = $_POST;


if(isset($request['name']) && isset($request['email'])){
    $name = $request['name'];
    $email = $request['email'];
    $subject = $request['subject'];
    $tel = $request['tel'];
    $message = $request['message'];

    $message_body = "<b>Name:</b> $name. <br><b>Email:</b>$email. <br><b>Subject:</b> $subject. <br><b>tel:</b> $tel. <b>Message:<b> $message";

    send_email_me("$name Wants to contact you..", $message_body);


}



function send_email_me($title, $message){
    global $conn;
    
    $userIP = $_SERVER['REMOTE_ADDR'];
    $to = "joyjohonroy@gmail.com";
    $subject = $title;
    $body = $message;
    $title = $title;

    // $body = str_replace("[%EMAIL_BODY%]", $body, file_get_contents('simple_message.html'));
    // $body = str_replace('[%EMAIL_TITLE%]',$title, $body );


    $data = send_email($to, $subject, $body);
    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Sent</title>
</head>
<body>
    <img style="width: 100vw; height:100vh; object-fit:cover; object-position:center;" src="../thankyou.jpg" alt="">

    <script>
    setTimeout(function() {
        window.location.replace("https://sushantoroy.000webhostapp.com/");
      }, 5000);
      </script>
</body>
</html>