<?php

$from = $_REQUEST["email_id"];
$first = $_REQUEST["first"];
$last = $_REQUEST["last"];
$name = $first." ".$last;
$msg= $_REQUEST["msg"];

//echo "$from"." "."$name";

require_once 'lib/swift_required.php';

ini_set("SMTP","mail.smtp2go.com");
ini_set("smtp_port"," 2525");

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('mail.smtp2go.com', 2525)
  ->setUsername('abhinav2506293@gmail.com')
  ->setPassword('newSMTP2')
  ;

/*
You could alternatively use a different transport such as Sendmail or Mail:

// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Mail
$transport = Swift_MailTransport::newInstance();
*/

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('MAIL USING PHP')
  ->setFrom(array($from => $name))
  ->setTo(array('abhinav2506293@gmail.com'=> 'Abhinav Tiwari'))
  ->setBody($msg)
  ;

// Send the message
$result = $mailer->send($message);


//confirmation
if ($result)
{
  echo "Sent\n";
}
else
{
  echo "Failed\n";
}
?>