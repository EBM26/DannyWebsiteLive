  <?php
  require_once "recaptchalib.php";

  // foreach ($_POST as $key => $value) {
  //   echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
  //  }
 
		if(isset($_POST['submit'])) {
			$secret = "6Le-0QgUAAAAAP_2m3fGCNDVfM_ffYnHW8O53Yau";
			$response = null;
			$reCaptcha = new ReCaptcha($secret);

			if ($_POST["g-recaptcha-response"]) {
    		$response = $reCaptcha->verifyResponse(
        	$_SERVER["REMOTE_ADDR"],
        	$_POST["g-recaptcha-response"]
    		);
			}

			if ($response != null && $response->success) {

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
			$to = "office@drbenmoshe.com"; 
			$headers = "From: $email_from \r\n";
			$headers .= 'Cc: drbenmoshe@drbenmoshe.com' . "\r\n";
			$headers .= "Reply-To: $visitor_email \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			mail($to, $email_subject, $email_body, $headers);
 			 } else {}

	
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
				
											?>


	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
		<meta http-equiv="x-ua-compatible" content="IE=edge" >
		<title>About Dr. Danny Benmoshe - Neurologist in Santa Monica - Headache Specialist</title>
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
		<link rel="stylesheet" href="style.css" />
		<meta name="description" content="Dr. Danny Benmoshe learned medicine at  Albert Einstein College of Medicine and performed his internship, residency, and fellowship at Harbor-UCLA Medical Center Department of Neurology. His fellowship training in Neurophysiology enables him to perform specific diagnostic testing including electro-encephalograms (EEGs) and electromyograms/nerve conduction studies (EMG/NCVs) for the diagnosis of seizures and nerve/muscle disorders respectively. Dr. Benmoshe specializes in headaches, Parkinsons, tremors, movement disorders, dementias, memory problems, epilepsy, and fainting spells. He speaks fluent Spanish, Hebrew, and Farsi and has a very holistic approach to Neurology">
	</head>
	<body>
		<div class="wrapper">
			<header class="header">
				<div class="header-bar row">
					<div class="columns large-6 medium-6 mobile-hidden">

					</div><!-- /.columns large-6 -->

					<div class="columns large-6 medium-6">
						<div class="socials">
							<ul>
								<li>
									<a href="https://www.facebook.com/drbenmoshe/?ref=aymt_homepage_panel" target="_blank">
										<i class="fa fa-facebook"></i>
									</a>
								</li>

								<li>
									<a href="https://twitter.com/benmoshe_neuro" target="_blank">
										<i class="fa fa-twitter"></i>
									</a>
								</li>

								<li>
									<a href="https://www.instagram.com/benmoshe_neurology/" target="_blank">
										<i class="fa fa-instagram"></i>
									</a>
								</li>
							</ul>
						</div><!-- /.socials -->

						<a href="" class="button btn-light-blue waypoint">Se Habla Español</a>
					</div><!-- /.columns large-6 -->
				</div><!-- /.header-bar row -->

				<div class="row">
					<div class="columns large-1 medium-3" id="logo-div">
						<a href="index.html" class="logo">
							<img src="assets/images/NakedLogo.png" alt="Health &amp; Medical">
						</a>
					</div><!-- /.columns large-3 -->

					<div class="columns large-3 medium-9 small-10">
						<a href="index.html">
							<h3 id="Danny-name">Danny Benmoshe, MD.</h3>
						</a>
					</div>

					<div class="columns large-6 medium-8">

						<a href="#" class="btn-menu">
							<span></span>
						</a>

						<nav class="nav">
							<ul class="clearfix">
								<li class="current">
									<a href="index.html">Home</a>
								</li>

								<li>
									<a >About Us</a>
									<ul class="nav-dropdown">
										<li>
											<a href="about-dr-benmoshe.html">
												<i class="fa fa-plus"></i> Danny Benmoshe, MD.
											</a>
										</li>

										<li>
											<a href="index.html#providers">
												<i class="fa fa-plus"></i> Insurance Providers
											</a>
										</li>

										<li>
											<a href="index.html#disorders">
												<i class="fa fa-plus"></i> Disorders/Procedures
											</a>
										</li>

										<li>
											<a href="index.html#links-section">
												<i class="fa fa-plus"></i> Useful Links</a>
											</li>
										</ul>
									</li>

									<li>
										<a href="assets/images/Dr_Benmoshe_New_Patient_Form.pdf" download> Office Forms</a>
									</li>

									<li>
										<a href="index.html#reviews">Reviews</a>
									</li>

									<li>
										<a href="index.html#contact-us">Contact Us</a>
									</li>
								</ul>
							</nav><!-- /.nav -->
						</div><!-- /.columns large-6 -->

						<div class="columns large-2 medium-4 mobile-hidden">
							<p class="phone">
								<i class="fa fa-mobile"></i>
								<small>Call Us at:</small>
								<a href='tel: 310 315 1456'>310 315 1456</a>				
							</p><!-- /.phone -->
						</div><!-- /.columns large-3 -->
					</div><!-- /.row -->
				</header><!-- /.header -->	

				<div class="main">
					<div class="row">
						<div class="columns large-12">
							<h1 style="font-size: 2em; margin: 100px auto 20px;">Thank you for contacting us! Your message has been received and our staff will reply to it shortly</h1>
							<a href="http://drbenmoshe.com/" style="font-size: 30px; display: block; margin-bottom: 100px; text-align: center;">Click here to return to our home page</a>
						</div><!-- /.columns large-12 -->

					</div>	
				</div><!-- /.main -->
				<div class="footer">
					<div class="row">
						<div class="columns large-4 medium-12">
							<h5>Dr. Benmoshe</h5>
							<ul class="list-links">
								<li>
									<a href="about-dr-benmoshe.html">About us</a>
								</li>

								<li>
									<a href="index.html#providers">Insurance Providers</a>
								</li>

								<li>
									<a href="index.html#disorders">Patient Information</a>
								</li>

								<li>
									<a href="index.html#reviews">Reviews</a>
								</li>

							</li>
						</ul><!-- /.list-links -->
					</div><!-- /.columns large-4 -->


					<div class="columns large-3 medium-12">
						<h5>Opening Hours</h5>
						<ul class="list-work-times">
							<li>
								<p>
									<span>Monday - Friday</span>

									<span>9:00 am - 17:00 pm</span>
								</p>
							</li>

							<li>
								<p>
									<span>Saturday</span>

									<span>CLOSED</span>
								</p>
							</li>

							<li>
								<p>
									<span>Sunday</span>

									<span>CLOSED</span>
								</p>
							</li>
						</ul><!-- /.list-work-times -->
					</div><!-- /.columns large-3 -->

					<div class="columns large-4 medium-12 contacts">
						<h5>Contact Us</h5>
						<p>2001 Santa Monica Blvd, Suite 880 <br /> 90404, Santa Monica</p>
						<ul>
							<li>
								<p>
									<span>Phone : </span>
									<span><a href='tel: 310 315 1456'>310 315 1456</a></span>
								</p>
							</li>

							<li>
								<p>
									<span>Email :</span>
									<span><a href="mailto:office@drbenmoshe.com?cc=drbenmoshe@drbenmoshe.com">office@drbenmoshe.com</a></span>
								</p>

							</li>
						</ul>
					</div><!-- /.columns large-4 -->
				</div><!-- /.row -->

				<div class="row">
					<p class="copyright">Another fabulous site by <a href="http://www.eyalbenmoshe.com/" class="ebm-link" target="_blank">EBM26</a></p><!-- /.copyright -->
				</div><!-- /.row -->
			</div><!-- /.footer -->	
		</div><!-- /.wrapper -->
		<script src="assets/javascripts/vendor.js"></script>
		<script src="assets/javascripts/jquery.stellar.min.js"></script>
		<script src="assets/javascripts/app.js"></script>
	</body>
	</html>