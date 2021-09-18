<?php
header('Content-type: application/json');
$status = array(
'type'=>'success',
'message'=>'Thank you for contact us. As early as possible we will contact you '
);
$name       = trim(stripslashes($_POST['name'])); 
$from       = trim(stripslashes($_POST['email'])); 
$subject    = trim(stripslashes($_POST['subject'])); 
$message    = trim(stripslashes($_POST['message'])); 
$to   		= 'info@workprogramming.com';//replace with your email

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

$success = mail($to, $subject, $message, $headers);
echo json_encode($success);
$success = mail($to, 'test', 'kkkkkk', 'From:g@gmail.com');
echo json_encode($success);
die;

