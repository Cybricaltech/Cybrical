<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = $_POST['subject'];

if($name != '' && $email != '' && $phone != '' && $message != '' && $subject != ''){
    $email_subject = "New Enquiry From Cybrical Website";
    $email_body = "You have new messge from name: " . $name . "\n email: " . $email . "\n mobile number: " . $phone . "\n subject: " . $subject . "\n message: " . $message;
    $to = "runraghu36@gmail.com";
    $headers = "From: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    echo json_encode(array('status'=>'1'));
}else{
    echo json_encode(array('status'=>'0'));
}
?>