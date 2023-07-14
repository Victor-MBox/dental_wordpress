<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';
$name='';
$phone='';
$email='';
if(isset($_POST['name'])) {
$name = $_POST['name'];
}
if(isset($_POST['phone'])) {
$phone = $_POST['phone'];
}
if(isset($_POST['email'])) {
$email = $_POST['email'];
}
$texterea='';
if(isset($_POST['texterea'])) {
$texterea = $_POST['texterea'];
}



$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.beget.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dental@p-prosto.ru';                 // Наш логин
$mail->Password = 'a%FKZF6I';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('dental@p-prosto.ru', 'Dental Test Site');   // От кого письмо 
$mail->addAddress('victor.matsakov7@gmail.com');     // Add a recipient

$mail->Subject = 'Данные';
if($name=='' && $phone=='') {
	$mail->Body    = '
	Пользователь подписался на акции 
	E-mail: ' . $email;
} else {
$mail->Body    = '
	Пользователь оставил данные 
	Имя: ' . $name . ' 
	Номер телефона: ' . $phone . '
	E-mail: ' . $email . '
	Вопрос: ' . $texterea . '';
}
if(!$mail->send()) {
    return false;
} else {
    return true;
}
