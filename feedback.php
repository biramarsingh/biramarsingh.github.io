<?php
//chane to your email $to
$to = "ajsapkota789@gmail.com";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
//change header email from and reply to
$headers = 'From: Bir Amarsingh <arjunsapkota03.000wehostapp.com>' . "\r\n" .
           'Reply-To: ajsapkota03.000webhostapp.com' . "\r\n" .
           'X-Mailer: PHP' . phpversion();
$subject = "Bir Amarsingh Website";
$body = "Data from Feedback form";
$body .="\r\nName: " . $name;
$body .="\r\nE-mail: " . $email;
$body .="\r\nmessage: " . $message;

if (mail($to,$subject,$body,$headers)){
 header( "Location:https://fttpserver.000webhostapp.com/index.html" );
}   else {
    echo 'Sorry, Something Went wrong, Please try again.</br><a href="face.html">Go Back</a>';
}
?>