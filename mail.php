<?php
/*
From http://www.html-form-guide.com 
This is the simplest emailer one can have in PHP.
If this does not work, then the PHP email configuration is bad!
*/
$msg="";
if(isset($_POST['submit']))
{
    /* ****Important!****
    replace name@your-web-site.com below 
    with an email address that belongs to 
    the website where the script is uploaded.
    For example, if you are uploading this script to
    www.my-web-site.com, then an email like
    form@my-web-site.com is good.
    */

	$from_add = "contact@roshinvarghese.com"; 

	$to_add = "roshin@iusolve.com"; //<-- put your yahoo/gmail email address here

	
	$name    = $_POST['name'];
    $email   = $_POST['email'];
	$message = $_POST['message'];
	$location   = $_POST['location'];
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ". 
					" Here are the details:\n Name: $name \n ". 
					"Email: $email \n Location: $location \n Message: \n $message";
	
	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $from_add \r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	
	
	if(mail($to_add,$email_subject,$email_body,$headers)) 
	{
		$msg = "Message Sent!";
	} 
	else 
	{
 	   $msg = "Error sending mail!";
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Test form to email</title>
	
	<!-- Contact Form -->
	<style>
		form {
			font-family: 'roboto', sans-serif;
			<!-- width: 460px; -->
			margin: 0px auto 0;
			/* box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2); */
			padding: 0 0 40px;
			border-radius: 3px;
			color: #555;
			}
	
		input::-webkit-input-placeholder,
		textarea::-webkit-input-placeholder {
		  font: inherit;
		  -webkit-transition: font-size 0.3s ease-in-out, visibility 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
		  transition: font-size 0.3s ease-in-out, visibility 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
		  transition: transform 0.3s ease-in-out, font-size 0.3s ease-in-out, visibility 0.3s ease-in-out;
		  transition: transform 0.3s ease-in-out, font-size 0.3s ease-in-out, visibility 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
		}

		input,
		textarea {
		  font: inherit;
		  font-size: 0.9em;
		  margin: 6px 0px 32px;
		  width: 650px;
		  display: block;
		  border: none;
		  padding: 16px 0 10px;
		  border-bottom: solid 1px #03A9F4;
		  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #03A9F4 4%);
		  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #03A9F4 4%);
		  background-position: -700px 0;
		  background-size: 700px 100%;
		  background-repeat: no-repeat;
		  -webkit-transition: background 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
		  transition: background 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
		  resize: none;
		  overflow: hidden;
		}
		input:focus::-webkit-input-placeholder,
		textarea:focus::-webkit-input-placeholder {
		  color: #03A9F4;
		}
		input:focus, input:valid,
		textarea:focus,
		textarea:valid {
		  box-shadow: none;
		  outline: none;
		  background-position: 0 0;
		}
		input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder,
		textarea:focus::-webkit-input-placeholder,
		textarea:valid::-webkit-input-placeholder {
		  font-size: 0.9em;
		  -webkit-transform: translateY(-20px);
				  transform: translateY(-20px);
		  visibility: visible !important;
		  opacity: 1;
		}

		input[type="email"] {
		  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #03A9F4 4%);
		  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #03A9F4 4%);
		  background-position: -700px 0;
		  background-repeat: no-repeat;
		  -webkit-transition: border-bottom 0.3s ease, background 0.3s ease;
		  transition: border-bottom 0.3s ease, background 0.3s ease;
		}
		input[type="email"] ~ span.validation-text {
		  position: absolute;
		  visibility: hidden;
		  font-family: 'roboto', sans-serif;
		  font-size: 0.6em;
		  width: 400px;
		  margin-left: 25px;
		  margin-top: -5px;
		  color: white;
		  -webkit-transition: color 0.3s ease-in-out;
		  transition: color 0.3s ease-in-out;
		}
		input[type="email"]:not([value=""])::-webkit-input-placeholder {
		  font-size: 0.8em;
		  -webkit-transform: translateY(-20px);
				  transform: translateY(-20px);
		  visibility: visible !important;
		  opacity: 1;
		}
		input[type="email"]:not([value=""]):focus::-webkit-input-placeholder {
		  color: #03A9F4;
		}
		input[type="email"]:not([value=""]):focus:not(:valid)::-webkit-input-placeholder {
		  color: #E91E63;
		}
		input[type="email"]:focus {
		  background-position: 0 0;
		}
		input[type="email"]:focus:not(:valid):not([value=""]) {
		  border-bottom: solid 1px #E91E63;
		  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #E91E63 4%);
		  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #E91E63 4%);
		}
		input[type="email"]:not(:focus):not(:valid):not([value=""]) {
		  border-bottom: solid 1px #E91E63;
		  background-position: 0 0;
		  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #E91E63 4%);
		  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #E91E63 4%);
		}
		input[type="email"]:not(:focus):not(:valid):not([value=""])::-webkit-input-placeholder {
		  color: #E91E63;
		}
		input[type="email"]:not(:focus):not(:valid):not([value=""]) ~ span.validation-text {
		  visibility: visible;
		  color: #E91E63;
		  top: 150px;
		font-size: 13px;
		}

		.cflex {
		  display: -webkit-box;
		  display: -webkit-flex;
		  display: -ms-flexbox;
		  display: flex;
		  -webkit-box-align: stretch;
		  -webkit-align-items: stretch;
			  -ms-flex-align: stretch;
				  align-items: stretch;
		}
		.cflex textarea {
		  line-height: 120%;
		}
</style>		

	<!-- Materialize Button -->
 	<style>
		.box {
		  margin: 1rem;
		  width: 18.75rem;
		}
		.box img {
		  width: 100%;
		}

		.btn {
		  border: none;
		  color: white;
		  overflow: hidden;
		  margin: 1rem;
		  padding: 0;
		  text-transform: uppercase;
		  width: 150px;
		  height: 40px;
		  
		  float:right;
		  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		  transition: all 0.2s ease-in-out;
		}
		.btn:hover {
		  box-shadow: 0 5px 10px rgba(0,0,0,0.19), 0 3px 3px rgba(0,0,0,0.23);
		}
		.btn.color-1 {
		  background-color: #426FC5;
		}
		.btn.color-2 {
		  background-color: #00897b;
		}
		.btn.color-3 {
		  background-color: #f6774f;
		}
		.btn.color-4 {
		  background-color: #e94043;
		}

		.btn-border.color-1 {
		  background-color: transparent;
		  border: 2px solid #426FC5;
		  color: #426FC5;
		}
		.btn-border.color-2 {
		  background-color: transparent;
		  border: 2px solid #00897b;
		  color: #00897b;
		}
		.btn-border.color-3 {
		  background-color: transparent;
		  border: 2px solid #f6774f;
		  color: #f6774f;
		}
		.btn-border.color-4 {
		  background-color: transparent;
		  border: 2px solid #e94043;
		  color: #e94043;
		}

		.btn-round {
		  border-radius: 3px;
		}

		.material-design {
		  position: relative;
		}
		.material-design canvas {
		  opacity: 0.25;
		  position: absolute;
		  top: 0;
		  left: 0;
		}
	
		#text{
			color:green;
			float:right;
			line-height:70px;
		}
	</style>	
	
	<!-- Buttons Related -->
	<link rel="stylesheet" type="text/css" href="../css/buttons.css" />
	
</head>

<body>

<p>
		<form action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' Method="POST">
			  <input name="name" placeholder="Name" type="text"  value="" required>
			  <input name="email" placeholder="Email address" type="email" onblur="this.setAttribute('value', this.value);" value="" required>
			  <span class="validation-text">Please enter a valid email address.</span>
			  <input name="location" placeholder="Location" type="text" value="" required>
			  <div class="cflex">
				<textarea name="message" placeholder="Message" rows="1" required></textarea>	
				<br>
				<br>				
				</div>
				<div id="text" class="button--text-thick button--text-upper button--size-s"><?php echo $msg ?>&nbsp;&nbsp;&nbsp;
				<button type='submit' class="btn color-4 material-design button--text-thick button--text-upper button--size-s btn-round" name='submit' value='Submit'>Submit</button>
			</div>
		</form>
</p>

<!-- Contact Submit Button -->
	<script src="../js/m-index.js"></script>
</body>
</html>