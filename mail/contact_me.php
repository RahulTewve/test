<?php
//// Check for empty fields
//if(empty($_POST['name'])  		||
//   empty($_POST['email']) 		||
//   empty($_POST['phone']) 		||
//   empty($_POST['message'])	||
//   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//   {
//	echo "No arguments Provided!";
//	return false;
//   }
	
//$name = strip_tags(htmlspecialchars($_POST['name']));
//$email_address = strip_tags(htmlspecialchars($_POST['email']));
//$phone = strip_tags(htmlspecialchars($_POST['phone']));
//$message = strip_tags(htmlspecialchars($_POST['message']));
// Create the email and send the message
$to = 'tojo@tewve.com,tojopaul.m@gmail.com,tojo@yopmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Feedback Form:  ";
$email_body = "You have received a feedback from your website feedback form.\n\n";
$headers = "From:  asdasdasdasd asdas dasd\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: test@tewve.com";	
mail($to,$email_subject,$email_body,$headers);
echo "yes";			
?>
