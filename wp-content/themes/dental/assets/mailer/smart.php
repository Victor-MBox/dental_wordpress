<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';

$name = '';
$phone = '';
$email = '';
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
$texterea = '';
if (isset($_POST['texterea'])) {
    $texterea = $_POST['texterea'];
}
$formName = '';
if (isset($_POST['form_name'])) {
    $formName = $_POST['form_name'];
}

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// Настройки SMTP
$mail->isSMTP();
$mail->Host = 'smtp.beget.com';
$mail->SMTPAuth = true;
$mail->Username = 'dental@p-prosto.ru';
$mail->Password = 'a%FKZF6I';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465; 

// От кого письмо
$mail->setFrom('dental@p-prosto.ru', 'Сайт zubkivsem');
// Кому отправить
$email_address = get_field('adres_pochty_dlya_zayavok', 'option');
$mail->addAddress('$email_address');

$mail->Subject = 'Заявка с сайта';

if ($name == '' && $phone == '') {
    // Если поля Имя и Телефон не заполнены
    $mail->Body = '
    Пользователь подписался на акции 
    E-mail: ' . $email;
} elseif ($name == '' && $phone != '') {
    // Если поле Имя не заполнено, но заполнено поле Телефон
    $mail->Body = '
    Пользователь оставил данные 
    Номер телефона: ' . $phone . '
    Название формы: ' . $formName;
} else {
    // Если заполнены оба поля Имя и Телефон
    $mail->Body = '
    Пользователь оставил данные 
    Имя: ' . $name . ' 
    Номер телефона: ' . $phone . '
    E-mail: ' . $email . '
    Вопрос: ' . $texterea . '
    Название формы: ' . $formName;
}



if (!$mail->send()) {
	return false;
} else {
	return true;
}
