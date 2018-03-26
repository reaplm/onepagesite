<?php
//contact form widget
function contact_me(){
	if (isset($_POST['email'])) {
		$name= $_POST['name'];
		$to = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$admin_email = 'pdm.molefe@gmail.com';
		$headers[] = 'From: Pdm Molefe <pdm.molefe@gmail>';
		
		$sent = wp_mail( $to, $subject, $message, $headers );
		if($sent){
			return 'Message sent successfully!';
		}
		else{
			return 'Sorry something went wrong. Please try again';
		}
	}
}
?>