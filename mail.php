<?php
$to = "show@actorviktor.kiev.ua";
$event = $_POST['user_event'];
$event .= "  ";

$date = $_POST['user_date'];

$subject = $event. $date ;


$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$text = $_POST['user_text'];

$message = "Новый заказ от: ".$name."\nТелефон: ".$phone."\nEmail: ".$email."\nКомментарии: ".$text;

if(var_dump(mail($to, $subject, $message))) {
    echo 'Error';
} else {
    header('location: cooperation.html');
}
?>