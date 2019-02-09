<?php

if (isset($_POST["Send"])) {
	$recipient = "isaac.shaha64@gmail.com";
	$subject = "Message from VanFilms Website";
	$senderName = test_input($_POST["Name"]);
	$senderEmail = test_input($_POST["Email"]);
	$message = test_input($_POST["Message"]);
}

echo "1"

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: " . $senderEmail . "\r\n";

echo "2"

mail($recipient, $subject, $message, $headers);

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>