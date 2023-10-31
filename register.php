<?php
//chane to your email $to
$to = "ajsapkota789@gmail.com";
$name = $_POST['name'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$school = $_POST['school'];
$year = $_POST['year'];
$gpa = $_POST['gpa'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$male = $_POST['male'];
$female = $_POST['female'];
$address = $_POST['address'];
$city = $_POST['city'];
$nine = $_POST['nine'];
$ten = $_POST['ten'];
$eleven = $_POST['eleven'];
$twelve = $_POST['twelve'];

//change header, email from and reply to
$headers = 'From: Bir Amarsingh Website <arjunsapkota03.000wehostapp.com>' . "\r\n" .
           'Reply-To: ajsapkota03.000webhostapp.com' . "\r\n" .
           'X-Mailer: PHP' . phpversion();
$subject = "Student Registration Details";
$body = "Details of Student are as follow :";
$body .="\r\nName: " . $name;
$body .="\r\nFather Name: " . $fname;
$body .="\r\nMother Name: " . $mname;
$body .="\r\nPassed school name: " . $school;
$body .="\r\nPassed year: " . $year;
$body .="\r\nGPA: " . $gpa;
$body .="\r\nEmail-ID: " . $email;
$body .="\r\nDate of birh: " . $dob;
$body .="\r\nPhone: " . $phone;
$body .="\r\nGender: " . $male;
$body .="\r\nAddress: " . $address;
$body .="\r\nCity: " . $city;
$body .="\r\nClass applied for: " . $nine;



if (mail($to,$subject,$body,$headers)){
 header( "Location:http://coderarjun.tk/biramarsingh" );
}   else {
    echo 'Sorry, Something Went wrong, Please try again.</br><a href="face.html">Go Back</a>';
}
?>