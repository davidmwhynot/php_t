<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$body = 'An email test!';

$mail->AddReplyTo('noreply@davidwhynot.me', 'David Whynot');
$mail->SetFrom('noreply@davidwhynot.me', 'David Whynot');
$mail->AddAddress('davidmwhynot@gmail.com', 'Test');
$mail->Subject = 'Test email';
$mail->MsgHTML( $body );
//$mail->IsSMTP();


if($mail->Send()) {
	echo "Mailer success";
} else {
	echo "Mailer Error: " . $mail->ErrorInfo;
}
?>
