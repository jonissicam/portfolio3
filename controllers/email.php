<?php 

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';

// $mail = new PHPMailer(true);
// try{
// 	$mail->isSMTP();
// 	$mail->Host = "smtp.gmail.com";
// 	$mail->Username = 'capstone2jonis@gmail.com';
// 	$mail->Password = 'jonis54321';
// 	$mail->SMTPSecure = 'tls';
// 	$mail->Port = 587;

// 	$mail->setFrom('capstone2jonis@gmail.com', 'Portfolio');
// 	$mail->addAddress('jonissicam@gmail.com');

// 	$mail->isHTML(true);
// 	$mail->Subject = "Portfolio Notification";
// 	$mail->Body = $_SESSION['message'];
// }
var_dump($_SESSION);
?>