<?php



require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

 


function send_email($to, $subject, $message)
{

    //pass: passwordHere
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com"; //host masing2 provider email
    $mail->SMTPDebug = 0;
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = "shantowebpanel@gmail.com"; //user email
    $mail->Password = "evzzssffyirxjhkk"; //password email 
    $mail->SetFrom("shantowebpanel@gmail.com", "Website");
    //bakend part



    $mail->Subject = "$subject"; //subyek email
    $mail->AddAddress("$to");  //tujuan email
    $mail->MsgHTML(urldecode("$message"));
    try {
        if ($mail->Send()){
            
            return true;
        }else return false;
    } catch (Exception $e) {
        return false;
    };

    
}





function time_now(){
    $dt = new DateTime("now", new DateTimeZone('Asia/Dhaka')); //first argument "must" be a string
    $dt->setTimestamp(time()); //adjust the object to correct timestamp
    $date =  $dt->format('Y-m-d, H:i:s');
    return($date);
}
