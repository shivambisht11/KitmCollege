<?php

$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from = 'info@kitmcollege.com';
$email_subject = 'New Form Submission';
$email_body = "Student Name: $name.\n".
                "Student Email: $visitor_email.\n".
                    "Subject: $subject.\n". 
                        "Message: $message.\n";
$to = 'dhouninikhil@gmail.com';
$headers = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: ..//contact-us.html");

?>