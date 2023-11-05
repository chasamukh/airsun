<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$Phone Number= $_POST['Phone Number'];
$message= $_POST['message'];
$to = "christianhasmukh17@mail.com";
$subject = "Mail From Web Design website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n "Phone Number = ". $Phone Number . "\r\n   Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:Thankyou.html");
?>