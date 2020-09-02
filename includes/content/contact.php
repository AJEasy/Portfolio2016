<?php
$msg = '';
if(isset($_POST['submit'])){
	require 'PHPMailer/PHPMailerAutoload.php';
	
	function sendemail($to, $from, $fromName, $body){
		$mail = new PHPMailer();
		$mail->setFrom($from, $fromName);
		$mail->addAddress($to);
		//$mail->addAddress('aje600@gmail.com');
		$mail->addAttachment($attachment);
		$mail->Subject = 'Contact form - Flywing Designs Email';
		$mail->Body = $body;
		$mail->isHTML(true);
		
		return $mail->send();
	}	
		
		$name = preg_replace('#[^a-zA-Z0-9]#i', '', $_POST['name']);
		$email = $_POST['email'];
		$message = preg_replace('#[^a-zA-Z0-9./ -]#i', '', $_POST['message']);
		
		$body = "Name: " . $name . "<br />" . "Email: " . $email . "<br />" . "Message: " . $message . "<br/>"; 
		//echo "<pre>";
		//print_r($_FILES);
		
		
		if(sendemail('anthony@flywingdesigns.com', $email, $name, $body)){
			$msg = 'Email sent!';
			sendemail('aje600@gmail.com', 'anthony@flywingdesigns.com', 'Flywing Designs', 'New Customer Request sent!');
		} else {
			$msg = 'Email Failed';
		}
		
	
}

?>

<div class="jumbotron">
<div class="container">
	
	<div class="row">
            <div id="contact" class="col-sm-6 offset-md-3 contact pt-5 pb-5 text-center">
            	<img src="images/button.png" class="float-right"/>
            	<img src="images/button.png" class="float-left"/>
            	<h3 class="mt-4">Contact Us</h3>
                <p class="">If you have any additional questions, Contact Us!</p>
				<h3>Flywing Designs</h3>
						<p class="mt-4">Feel free to message or call us<br/>
                        (Mon-Fri 9:30am-6:30pm, Sat 10:30am-4:00pm)<br/>
						(704) 680-2243<br/>
						3116 FIFTH Street Winston Salem, NC 27408
						<br/></p>
                <img src="images/button.png" class="float-right"/>
            	<img src="images/button.png" class="float-left"/>
            </div>
    </div>
            
      <div class="row pb-5">
        <div id="contact" class="col-sm-6 offset-md-3 contact pt-5 pb-4 ta-left">
			<div id="signupform">
				<fieldset>
							
					<div class="container-fluid">	
					<!--<form name="contactform" id="contactform" onsubmit="return false;" enctype="multipart/form-data">-->
					<form method="post" action="" enctype="multipart/form-data">
						<div class="form-group">
							<label for = "contact-name" class="col-lg-2 control-label visible-lg">Name</label>
							<div class="col-lg-10">
								<input id="contact-name" type="text" class="form-control" onblur="checkusername()" onkeyup="restrict('username')"  placeholder="Full Name" maxlength="60" name="name">
							</div>
						</div>
						<div class="form-group">
							<label for = "contact-email" class="col-lg-2 control-label visible-lg">E-Mail</label>
							<div class="col-lg-10">
								<input id="contact-email" type="text" class="form-control" onfocus="emptyElement('status')" onkeyup="restrict('email')" placeholder="you@example" maxlength="88" name="email">
							</div>
						</div>
						<div class="form-group">
							<label for = "contact-message" class="col-lg-2 control-label visible-lg">Message</label>
							<div class="col-lg-10" style="margin-bottom:10px;">
								<textarea class="form-control" id="contact-message" onfocus="emptyElement('status')" name="message" rows="8"></textarea>
							</div>
						</div>
						
						<div class="footer">
						<button id="signupbutton" name="submit" class="pull-right colorblk" style="margin-right:15px;" onclick="signup()">Send Message</button>
						<!--<span id="status"></span>-->
						<?php echo $msg; ?>
						</div>
					</form>
					</div>
				</fieldset>			
			</div>			
        </div>
	  </div>
	</div>
</div>