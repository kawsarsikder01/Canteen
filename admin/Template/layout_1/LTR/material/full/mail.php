<?php 
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer();

try{
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '7a0a02430a6794';
    $mail->Password = 'bf5671dc6f8918';


    $mail->setFrom('mdkawsarsikder01@gmail.com', 'SEIP 12');
    $mail->addAddress('mdkawsarsikder12345@gmail.com', 'Mr. Kawsar');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    $mail->addAttachment($upload.'646b924c12781_chicken_sand.jpg', 'an-image.jpg'); 
    //Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'SEIP Here is the subject';
$mail->Body    = 'SEIP this is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'SEIP This is the body in plain text for non-HTML mail clients';

$mail->send();
echo 'Message has been sent';

}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
