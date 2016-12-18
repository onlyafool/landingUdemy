<?php

$name = $_POST['name'];
$name = $_POST['email'];
$name = $_POST['messageField'];

$header = "From:" . $email . "\r\n";
$header .= "X-Mailer: PHP /" . phpversion() . "\r\n";
$header .= "Mime Version: 1.0 \r\n";
$header .= "Content Type: text/plain";

$comment = "This message has been sent by " . $name . "\r\n";
$comment .= "Email is " . $email . "\r\n";
$comment .= "The message is: " . $message . . "\r\n";

$for "onlyafool@gmx.net";
$subject = "Contact from website";

mail($subject, utf8_decode($comment), $header );

echo json_encode(array(
	'Message' => sprintf("Your message has been sent %s", $name);
));

?>