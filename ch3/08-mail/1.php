<?php
$to			= "lthlan54@gmail.com";
$subject = 'Email test';
$message = 'This is a test';
$header = "From: lthlan54@gmail.com";

if(mail($to, $subject, $message, $header)==true){
    echo 'Sucess';
}else{
    echo 'Fail';
}