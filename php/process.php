<?php
$myemail = 'richard.eldridge2010@gmail.com';
 
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);

//generate email and send!
$to = $myemail;
$email_subject = "Contact form submission from: $name";
$email_body = "You have received a new message.\n".
    "Here are the details:\n".
    "Name: $name\n".
    "Email: $email\n".
    "Message: $message";
$headers = "From: $email\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}
