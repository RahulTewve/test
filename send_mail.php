<?php

 $email      = $_POST['email']; //Notice string in brackets is JSON key
 $name       = $_POST['name'];
 $subject    = $_POST['subject'];
 $text       = $_POST['text'];
 $telephone  = $_POST['telephone'];
 
$to= "info@hijazbuildtech.com";
$message = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $telephone\n\nMessage:\n$text";
//$headers = "From: r@example.com" . "\r\n" . "CC: somebodyelse@example.com";
$headers = "From : ".$email;

mail($to,$subject,$message,$headers);


 ?>