<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$texterea = $_POST['texterea'];


require_once('phpmailer/PHPMailerAutoload.php');
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
$mail->Body    = '
	Пользователь оставил данные 
	Имя: ' . $name . ' 
	Номер телефона: ' . $phone . '
	E-mail: ' . $email . '
	Вопрос: ' . $texterea . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}
