<?php
  
    $name = trim($_POST['names']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $msg = trim($_POST['message']);
    
    
    // Replace contact@example.com with your real receiving email address
    $to = "asharmohd2424@gmail.com";
    $message="<table><tr><td colspan=3><b>Contact Form Data</b></td></tr>";
    $message=$message."<tr><td>Name </td><td>:</td><td>".$name."</td></tr>";
    $message=$message."<tr><td>Email </td><td>:</td><td>".$email."</td></tr>";
    $message=$message."<tr><td>Contact No. </td><td>:</td><td>".$phone."</td></tr>";
    $message=$message."<tr><td>Message </td><td>:</td><td>".$msg."</td></tr></table>";
    $subject = 'Contact Form Data';
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
     // Replace contact@example.com with your real receiving email address
    $headers .= 'From: Webiste <asharmohd2424@gmail.com>' . "\r\n";

    $m = mail($to, $subject, $message, $headers);
    
?>
