<?php

$mail = $_POST['email'];
$name = $_POST['name']; 
$message = $_POST['message'];

$mess = 'Отправитель: '. $name. "\r\n". 'E-mail:'. $mail. "\r\n". 'Сообщение: '. $message;

$email = 'imap.beget.com';
$headers = "From: $email\r\nReply-To: $email" . "\r\n" . "MIME-Version: 1.0\r\nContent-type: text/plain; charset=utf-8";

mail('exokerxl@gmail.com', 'subject', $mess, $headers);

header('Location: http://kkkmt.web-mo.ru/efrs/');

?>