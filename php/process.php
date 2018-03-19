<?php
//add the recipient's address here
$myemail = 'richard.eldridge2010@gmail.com';
 
//grab named inputs from html then post to #thanks
if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);
echo "<span class=\"alert alert-success\" >Your message has been received. Thanks! Here is what you submitted:</span><br><br>";
echo "<strong>Name:</strong>".$name."<br>";
echo "<strong>Email:</strong>".$email."<br>";
echo "<strong>Message:</strong>".$message."<br>";
 
//generate email and send!
$to = $myemail;
$email_subject = "Contact form submission from: $name";
$email_body = "You have received a new message.\n".
    "Here are the details:\n".
    "Name: $name\n".
    "Email: $email\n".
    "Message:\n $message";
$headers = "From: $email\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}
