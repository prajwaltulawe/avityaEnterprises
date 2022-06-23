<?php
if($_SERVER["REQUEST_METHOD"] == "POST")  {
$myemail = "tulaveprajwal143@gmail.com";
$name = $_POST["name"];
$email_address = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. "."Here are the details:\n Name: $name \n"."Email: $email_address\n"."Subject:\n Subject: $subject \n"."Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact-form-thank-you.html");
}
?>