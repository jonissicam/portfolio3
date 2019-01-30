<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$customer_email = "jonissicam@gmail.com";
$message = $_POST['message'];

$staff_email = "capstone2jonis@gmail.com";
$body = "From: $email, <br> $message";

try{
	$mail-> isSMTP();
		$mail-> Host = "smtp.gmail.com";
		$mail-> SMTPAuth = true;
		$mail-> Username = $staff_email;
		$mail-> Password = "jonis54321";
		$mail-> SMTPSecure = "tls"; // enable tls encryption
		$mail-> Port = 587;

		//recipient
		$mail-> setFrom($staff_email, "$fname $lname");
		$mail-> addAddress($customer_email);

		$mail->isHTML(true);
		$mail-> Subject = $fname;
		$mail->	Body = $body;

		$mail-> Send();
	header("Location: ../index.php");
}catch(Exception $e){
	echo "Message could not be sent. Please try again";
}
?>