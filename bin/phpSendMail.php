<?php
	require_once ('PHPMailerAutoload.php');

	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Set who the message is to be sent from
	$mail->setFrom($from, $from_name);
	//Set an alternative reply-to address
	$mail->addReplyTo($replytoemail, $replytoname);
	//Set who the message is to be sent to
	$mail->addAddress($to, $to_name);
	//Set who is in CC
	if (! empty($cc)) $mail->addCC($cc, $cc_name);
	//Set the subject line
	$mail->Subject = $subject;
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML($message_body);
	//Replace the plain text body with one created manually
	$mail->AltBody = '';
	//Attach an image file
	//$mail->addAttachment('images/phpmailer_mini.png');

?>