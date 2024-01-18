<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$mobile_number = $_POST['mobile'];
$alternate_number = $_POST['alternate'];
$message = $_POST['message'];

$email_from = 'info@completemydreams.com';
$email_subject = 'New form Submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n". 
                "Mobile: $mobile_number.\n". 
                "Alternate Mobile Number: $alternate_number.\n". 
                "Message: $message.\n";

$to ='bishtneeru2021@gmail.com';
$headers = "From: $email_from \r\n";
$headers .="Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>