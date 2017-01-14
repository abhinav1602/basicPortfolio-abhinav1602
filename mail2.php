<?php
$to      = 'abhinav2506293@gmail.com';
$first = $_REQUEST["first"];
$last = $_REQUEST["last"];
$subject = 'Sent by'.$first.' '.$last.'From Postfolio'.;
$msg= $_REQUEST["msg"];
$from = $_REQUEST["email_id"];
$headers = $from . "\r\n" .
    'Reply-To: '.$from. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?> 