		<?php include("header.php") ?>        
        <?php include("slider.php") ?>
        
        <?php
			if(isset($_POST['submit']) && isset($_POST['flag']) && $_POST['flag'] == 1){
					//print_r($_POST);
				$name 	 = $_POST['name'];
				$email 	 = $_POST['email'];
				$subject = $_POST['subject'];
				$phone 	 = $_POST['phone'];
				$message = $_POST['message'];
			
				if(empty($name)){
					$name_error = "Name is Required!";
				}
				if(empty($email)){
					$email_error = "Email is Required!";
				}
				if(empty($subject)){
					$subject_error = "Subject is Required!";
				}
				if(empty($phone)){
					$phone_error = "Phone is Required!";
				}
				if(empty($message)){
					$message_error = "Message is Required!";
				}
				if(empty($_POST['g-recaptcha-response'])){
					$captcha_error = "Please fill the captcha again!";
				}
			
					
				$mail_to = 'info@cleanetic.net.au';
				$subject = 'Message from a site visitor '.$name;
				
				$body_message = 'From : '.$name."\n";
				$body_message .= 'E-mail : '.$email."\n";
				$body_message .= 'E-mail : '.$subject."\n";
				$body_message .= 'E-mail : '.$phone."\n";
				$body_message .= 'Message : '.$message;
				
				$headers = 'From: '.$email."\r\n";
				$headers .= 'Reply-To: '.$mail_to."\r\n";
			
				$mail_status = @mail($mail_to, $subject, $body_message, $headers);
			
				if ($mail_status) {		
					$success =	"Your Request has been submit.";	
				 }
				else { 
					$success = "Please try later!";
				} 
			}
		?>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <!-- Start Welcome -->
        <div class="row content">
            <div class="col-md-8">
                <h2 class="welcome">Contact Us</h2>
                <form role="form" action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                	<h3 class="sub_heading"><?php echo isset($success)?$success:''; ?></h3>
                    <div class="row">
                    	<div class="col-md-6">
                        	<div class="form-group">                            	
                            	<input type="hidden" name="flag" value="1">
                                <label for="name" class="label_color">Name: *</label>
                                <span class="validation_color"><?php echo isset($name_error)?$name_error:''; ?></span>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                            </div>
                        </div>                        
                        
                    	<div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="label_color">Email: *</label>
                                <span class="validation_color"><?php echo isset($email_error)?$email_error:''; ?></span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                            </div> 
                        </div> 
                        
                    	<div class="col-md-6">
                        	<div class="form-group">
                                <label for="subject" class="label_color">Subject: *</label>
                                <span class="validation_color"><?php echo isset($subject_error)?$subject_error:''; ?></span>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>  
                        </div>
                        
                        <div class="col-md-6">
                        	<div class="form-group">
                                <label for="phone" class="label_color">Phone: *</label>
                                <span class="validation_color"><?php echo isset($phone_error)?$phone_error:''; ?></span>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                            </div>  
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="message" class="label_color">Message: *</label>
                                <span class="validation_color"><?php echo isset($message_error)?$message_error:''; ?></span>
                                <textarea type="text" class="form-control" id="message" name="message" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="validation_color"><?php echo isset($captcha_error)?$captcha_error:''; ?></span>
                                <div class="g-recaptcha" data-sitekey="6LfeECETAAAAADZ2zfU9y5d_-psCVVH4teu3BpO3"></div>                      
                            </div>
                        </div>
                    </div>  
                                        
                    <div class="col-md-7">
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
            
            
            <div class="col-md-4">
                <h3 class="sub_heading">STAY IN TOUCH</h3>
                <div class="row">
                	<div class="col-md-3"><p class="paragraph"><strong>Address</strong></p></div>
                    <div class="col-md-9"><p class="paragraph">23 Miller Avenue Redcliffe Perth WA 6104 au</p></div>
                    
                    <div class="col-md-3"><p class="paragraph"><strong>Phone</strong></p></div>
                    <div class="col-md-9"><p class="paragraph">+61470059531</p></div>
                    
                    <div class="col-md-3"><p class="paragraph"><strong>Email</strong></p></div>
                    <div class="col-md-9">
                        <p class="paragraph">
                        	<a href="mailto:imran@cleanetic.net.au">imran@cleanetic.net.au</a>
                            <a href="mailto:info@cleanetic.net.au">info@cleanetic.net.au</a>
                        </p>
                    </div>
                    
                    <div class="col-md-12"><p class="paragraph"><strong>BUSINESS DEVELOPMENT MANAGER</strong></p></div>
                    
                	<div class="col-md-3"><p class="paragraph"><strong>Address</strong></p></div>
                    <div class="col-md-9"><p class="paragraph">Chansa Komb</p></div>
                    
                    <div class="col-md-3"><p class="paragraph"><strong>Phone</strong></p></div>
                    <div class="col-md-9"><p class="paragraph">+61 413345367</p></div>
                    
                    <div class="col-md-3"><p class="paragraph"><strong>Email</strong></p></div>
                    <div class="col-md-9">
                        <p class="paragraph">
                        	<a href="mailto:chansa@cleanetic.net.au">chansa@cleanetic.net.au</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Welcome -->
    </div>
    <!-- End Container -->  
    
    <?php include("testimonials.php") ?>
	<?php include("footer.php") ?>