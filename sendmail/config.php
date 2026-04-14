<?

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('uk', 'phpmailer/language/');
$mail->IsHTML(true);

$mail->isSMTP(); // Send using SMTP
$mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'olesia.w888@gmail.com'; // SMTP username (email)
$mail->Password = '.'; // SMTP password (Google Account -> Security -> App passwords -> Add)

//сгенерировать и вставить пароль(password) с гугл-аккаунта, тут выше. Для подключения электронной почты, остальное все для этого уже проставила!



$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;
