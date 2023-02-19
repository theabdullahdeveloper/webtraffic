<?php
// get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "abdullahofficial116@gmail.com";
$subject = "Mail From Web Traffic";
$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\nMessage =" . $message;
$headers = "From: noreply@webtraffic.com" . "\r\n" . "CC: somebodyelse@example.com";

// send email and check for errors
if ($email != NULL) {
    if (mail($to, $subject, $txt, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error: Email was not sent.";
    }
}

// redirect
header("Location:index.html");
?>
