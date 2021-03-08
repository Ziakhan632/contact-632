<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];

$to = "Ziakhan447313@gmail.com";
$subject = "Hello World";
$message = "Firstname: $firstname \n\n Lastname: $lastname";
$from = "sender@example.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>