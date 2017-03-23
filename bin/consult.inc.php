<?php
	$display_msg = false;
	if (isset($_REQUEST['act']) && $_REQUEST['act'] == "Send Email") {
    	$pname = filter_input(INPUT_POST, 'pname', FILTER_SANITIZE_STRING);
	    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    	$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    	$message = nl2br($message);
    	$subject = 'Web Consultation Request: from '.$pname.'';
    	$from = 'no-reply@shashwatiinpiles.com';
    	$from_name = 'Web Consultation';
    	$to = 'solankeejk@hotmail.com'; //drbharat@shashwatiinpiles.com
    	$to_name = 'Shashwati-Consultation';
    	$cc = '';
    	$cc_name = '';

		require_once ('phpSendMail.php');
		//send the message, check for errors
		if (!$mail->send()) {
			$alert_type = 'alert-info';
			$display_msg = true;
		    $actConfirmation = "<p>Due to technical reasons your request could not be submitted. Please email your query/feedback to us on info@shashwatiinpiles.com. </p> <p>Mailer Error: " . $mail->ErrorInfo . "</p>";
		} else {
			$alert_type = 'alert-success';
			$display_msg = true;
		    $actConfirmation = "Your Message has been submitted successfully! We shall be in touch with you shortly.";
		}

	}

?>