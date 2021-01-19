<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$email_from='jayeshpics17@gmail.com';
$email_subject='The JayKay Tech Inquery';
$email_body="User Name : $name.\n".
            "User Email : $email.\n".
            "User Subject : $subject.\n".
            "User Message : $message.\n";
$to="jayeshpics17@gmail.com";
$headers="From: $email_from \r \n";
$headers="Reply To: $email \r \n";
mail($to,$subject,$email_body,$headers);
header('Location: http://www.thejaykay.tech');
// header("Loaction : contact.php");
?>