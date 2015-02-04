
<?php 
// This will process the message form on the contact page
if ( isset($_POST['name']) && isset($_POST['subject']) && 
	isset($_POST['textarea']) && isset($_POST['email']) ){
	
	// Set working variables 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$textarea = $_POST['textarea'];
	$to = "punyweblab@gmail.com";
	$headers = "From: A message from Punyweblab" . "\r\n";
	



	if ($name === "" || $subject === "" || $textarea === "" || $email === "") {
		$error = "One or more fields are empty";
		echo $error;
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "That email is not valid";
		echo $error;
	}
	else{
		// Send the email
		mail($to, $subject, $textarea, $headers);
		$success = "Thanks, I'll get back to you soon";
		echo $success;
	}


}

 ?>