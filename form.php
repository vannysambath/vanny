<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'vannysambath.github.io'
$email_subject ='New From Submission'
$email_body = "User Name:" $name.\n"
            "User Email:" $visitor_emai.\n"
            "Subject:" $subject.\n"
            "User Message:" $message.\n";
$to = "cambostchannel.gb@gmail.com"
$headers = "From: $email_from \r\n";
$headers .= "Replay-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>