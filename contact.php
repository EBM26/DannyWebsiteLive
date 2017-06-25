
<?php 
		if(isset($_POST['submit'])) {
			$name = $_POST['name'];
			$visitor_email = $_POST['email'];
			$message = $_POST['message'];
			$phone = $_POST['phone'];
			$date = $_POST['date'];
			$email_from = 'drbenmoshe.com';  
			$email_subject = "Request for appointment or question for Dr. Benmoshe";

			$email_body = '<html><body>';
			$email_body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$email_body .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
			$email_body .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
			$email_body .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
			$email_body .= "<tr><td><strong>Would like to schedule an appointment on</strong> </td><td>" . strip_tags($_POST['date']) . "</td></tr>";
			$email_body .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";

			$email_body .= "</table>";
			$email_body .= "</body></html>";
			$to = "office@drbenmoshe.com"; // priscillarzc@gmail.com
			$headers = "From: $email_from \r\n";
			$headers .= 'Cc: drbenmoshe@drbenmoshe.com' . "\r\n";
			$headers .= "Reply-To: $visitor_email \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
				
											?>


	<h1 style="font-size: 50px; margin: 100px auto 20px;">Thank you for contacting us! Your message has been received and our staff will reply to it shortly</h1>
	<a href="http://drbenmoshe.com/" style="font-size: 30px;">Click here to return to our home page</a>