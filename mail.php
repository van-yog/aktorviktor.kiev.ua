
<?php
$to = "show@actorviktor.kiev.ua";
$event = $_POST['user_event'];
$event .= " - ";

$date = $_POST['user_date'];

$subject = $event. $date ;


$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$text = $_POST['user_text'];

$message = "Делаю по чуть-чуть";

if(var_dump(mail($to, $subject, $message))) {
    echo 'Error';
} else {
    header('location: agency.html');
}
?>

// require_once('phpmailer/PHPMailerAutoload.php');
// $mail = new PHPMailer;
// $mail->CharSet = 'utf-8';

// $name = $_POST['user_name'];
// // $phone = $_POST['user_phone'];
// // $email = $_POST['user_email'];
// // $date = $_POST['user_date'];

// //$mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp.ukr.net';  																							// Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'aktorviktor@ukr.net'; // Ваш логин от почты с которой будут отправляться письма
// $mail->Password = 'AaVv02022020$'; // Ваш пароль от почты с которой будут отправляться письма
// $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

// $mail->setFrom('aktorviktor@ukr.net'); // от кого будет уходить письмо?
// $mail->addAddress('ikharchenko2008@gmail.com');     // Кому будет уходить письмо 
// //$mail->addAddress('ellen@example.com');               // Name is optional
// //$mail->addReplyTo('info@example.com', 'Information');
// //$mail->addCC('cc@example.com');
// //$mail->addBCC('bcc@example.com');
// //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Заявка с тестового сайта';
// $mail->Body    = '' .$name . ' оставил заявку, его телефон ';
// $mail->AltBody = '';

// if(!$mail->send()) {
//     echo 'Error';
// } else {
//     header('location: agency.html');
// }
// ?>