<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once('class.phpmailer.php');
require_once('class.smtp.php');

$name = 'Alex';
$number = '888888888';
$email = 'chetca@yandex.ru';

$mail = new PHPMailer();
$mail->isSMTP(); 
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.ulan-ude-eg.ru'; 
$mail->SMTPAuth = true; 
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->Username = 'roditeli'; 
$mail->Password = '12587456'; 
//$mail->SMTPSecure = 'ssl'; 
$mail->Port = 25;
$mail->setFrom('roditeli@ulan-ude-eg.ru'); 
$mail->addAddress('chetca@yandex.ru'); 
$mail->addAddress('ShornikovAE@ulan-ude-eg.ru'); 

$mail->isHTML(true); 
$mail->Subject = 'Заголовок'; 
$mail->Body = 'Имя $name . Телефон $number . Почта $email'; 

if(!$mail->send()) {
 echo '<br><b>Message could not be sent!</b> ';
 echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
 echo 'ok';
}
?>