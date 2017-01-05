<?php

$to      = 'abhinav2506293@gmail.com';
$subject = $_POST["msg"]." through Portfolio";
$message = $_POST["msg"];
$email =  $_POST["email"];
$headers = "From: $email <$email>\r\n". 
               "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n"; 

mail($to, $subject, $message, $headers);

?>