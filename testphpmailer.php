<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'admin@pyx.co.in';
$mail->Password = 'mLJcjTe2rY';
$mail->setFrom('admin@pyx.co.in', 'Your Name');
$mail->addReplyTo('admin@pyx.co.in', 'Your Name');
$mail->addAddress('admin@pyx.co.in', 'Receiver Name');
$mail->Subject = 'Testing PHPMailer';

$mail->Body = 'This is a plain text message body';
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
}
?>