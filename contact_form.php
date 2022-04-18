<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message =$_POST['message'];

$emailTo="arushi.19417@knit.ac.in";
$headers="From: The Sparks Foundation Website".
$txt="You have received a mail from ".$name.$".\n\n".$message;

mail($emailTo, $txt, $headers);
header("Location: index.php?mailsend");

/*$email_from = 'arushi.19417@knit.ac.in';
$email_subject = "New Form Submission.";
$email_body = "User Name: $name. \n". 
"User Email: $visitor_email.\n". 
"User Message: $message.\n";
$to = "arushi.19417@knit.ac.in";
$headers = "From: $email_from\r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: index.html");*/
}
?>