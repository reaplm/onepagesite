	<?php
	
//contact form handler
	
	if (isset($_POST['email'])) {
		$name= $_POST['name'];
		$to = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$admin_email = 'pdm.molefe@gmail.com';
		$headers = 'From: Pearl Molefe <pdm.molefe@gmail>'. "\r\n" .
					 'X-Mailer: PHP/' . phpversion();

		$sent = mail( $to, $subject, $message, $headers );
		//$result[];
		if($sent){
			// Set a 200 (okay) response code.
			 http_response_code(200);
			$result['sent'] = 'success';
			echo 'Message sent! Thank You.';
			//echo $sent;
		}
		else{
			http_response_code(500);
			$result['sent'] = 'fail';
			echo 'Oops! Something went wrong.';
		}
	}

?>