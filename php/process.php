<?php
//add the recipient's address here
$myemail = 'richard.eldridge2010@gmail.com';

//grab named inputs from html then post to #thanks
if (isset($_POST['sdr'])) {
$name = strip_tags($_POST['sdr']);
$email = strip_tags($_POST['returnTo']);
$message = strip_tags($_POST['message']);
echo "<span class=\"alert alert-success\" >Your message has been received. Thanks! Here is what you submitted:</span><br><br>";
echo "<stong>Name:</strong> ".$sdr."<br>";
echo "<stong>Email:</strong> ".$returnTo."<br>";
echo "<stong>Message:</strong> ".$message."<br>";

//generate email and send!
$to = $myemail;
$email_subject = "Contact form submission: $sdr";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $returnTo\n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $returnTo";
mail($to,$email_subject,$email_body,$headers);
}
?>