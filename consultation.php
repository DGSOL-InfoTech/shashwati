<?php
  require_once ('globals.php');
  require_once ('functions.php');
  //define Variables
  $mchkd = $fchkd = $tchkd = NULL;
  $disp_val = false;  // $disp_val is true only if the page is returned as Go Back Action
  //Check if $_POST has some value
  if (isset($_POST['act'])) {
    foreach ($_POST as $key => $value) {
      ${$key} = $value;
      //echo $key.': '.${$key}.'<br>';
    }
    //Combine all the address fields
    if (empty($address)) $paddress = $city.', '.$pin; else $paddress = $address.', '.$city.', '.$pin;

    if (isset($act) && $act == "Accept and Submit") {
      //Do something if action is Accept and Submit

      $subject = 'Web Consultation Request: from '.$pname.'';
      $from = 'no-reply@shashwatiinpiles.com';
      $from_name = 'Web Consultation';
      $to = 'drbharat@shashwatiinpiles.com'; //drbharat@shashwatiinpiles.com
      $to_name = 'Shashwati-Consultation';
      $replytoemail = $email;
      $replytoname = $pname;
      $cc = ''; //$email;
      $cc_name = ''; //$pname;
      $message_body = '<p>There is a consultation request from '.$pname.' through website. The details given are as follows:</p>';
      $message_body .= '<table>';
      $message_body .= '<tr><td> Patient\'s Name:</td><td>'.$pname.'</td></tr>';
      $message_body .= '<tr><td> Patient\'s Gender:</td><td>'.$gender.'</td></tr>';
      $message_body .= '<tr><td> Patient\'s Age:</td><td>'.$age.'</td></tr>';
      $message_body .= '<tr><td> Email ID:</td><td>'.$email.'</td></tr>';
      $message_body .= '<tr><td> Address:</td><td>'.$paddress.'</td></tr>';
      $message_body .= '<tr><td> Patient\'s Disease:&nbsp;&nbsp;</td><td>'.$disease.'</td></tr>';
      $message_body .= '<tr><td> Complaints:</td><td>'.$complaints.'</td></tr>';
      $message_body .= '<tr><td> Duration:</td><td>'.$duration.'</td></tr>';
      $message_body .= '<tr><td> Diet Patern:</td><td>'.$diet.'</td></tr>';
      $message_body .= '<tr><td> Habits:</td><td>'.$habits.'</td></tr>';
      $message_body .= '<tr><td> Working Style:</td><td>'.$workingstyle.'</td></tr>';
      $message_body .= '<tr><td> Alergic to Drug:</td><td>'.$alergic.'</td></tr>';
      $message_body .= '</table>';
      $message_body .= '<p>Please reply to this email with your comments</p>';
      $message_body .= '<p>Thank you</p>';
      $message_body .= '<p>Website: <a href="http://www.shashwatiinpiles.com/consultation.php">Shashwati-Consultation</a></p>';
      require_once ('phpSendMail.php');
      //send the message, check for errors
      if (!$mail->send()) {
        $alert_type = 'alert-info';
        $display_msg = true;
        $actConfirmation = "<p>Due to technical reasons your request could not be submitted. Please contact us via phone if something is urgent. </p> <p>Mailer Error: " . $mail->ErrorInfo . "</p>";
      } else {
        $alert_type = 'alert-success';
        $display_msg = true;
        $actConfirmation = "Your request has been submitted successfully! We shall be in touch with you shortly.";
      }
    } 
    
    if (isset($act) && $act == "Go Back") {
      //Do something if action is Go Back 
      $disp_val = true;
      if ($gender == "Male") $mchkd = "checked"; else $mchkd = NULL;
      if ($gender == "Female") $fchkd = "checked"; else $fchkd = NULL;
      if ($gender == "Transgender") $tchkd = "checked"; else $tchkd = NULL;
      $disease = br2nl($disease);
      $complaints = br2nl($complaints);
      $duration = br2nl($duration);
      $diet = br2nl($diet);
      $habits = br2nl($habits);
      $workingstyle = br2nl($workingstyle);
      $alergic = br2nl($alergic);
    } 


  }    


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Shashwati | Consultation</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://www.dgsol-in.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">

	<!-- start header -->
  <header>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/logo.jpg" style="max-height:60px; margin-top: -7px;" alt="SHASHWATI"/></a>
        </div>
        <div class="navbar-collapse collapse ">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li> 
            <li><a href="about.php">About Us</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li><a href="info.php">Information</a></li>
            <li class="active"><a href="consultation.php">Consultation</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Consultation From Home</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
		<div class="container">
      <?php if ($display_msg): ?>
        <div class="row">
          <div class="alert <?php echo $alert_type; ?> alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong></strong> <?php echo $actConfirmation; ?>
          </div>      
        </div>
      <?php endif; ?>
      <div class="row">
        <div class="col-sm-12">
          <p>It’s our immense pleasure to announce a new consulting system for ano-rectal patients such as O.P.D. from home. Basically in these diseases patient always feel shy to discuss about their complaints to anybody even family members also. Our moto behind this is to treat your complaints or disease at earlier stage so that we can avoid further complications and can give you a better lifestyle.We are providing you a platform through which you can directly communicate to our doctors and you will get absolutely free guidance and treatment.</p>
          <p>Whether you are living anywhere in India or abroad, just fill in the following form and submit it. </p>
        </div>
        <div class="col-sm-8">
          <form class="form-horizontal" role="form" name="consultRequest" id="consultRequest" action="consultConfirm.php" method="post" novalidate> 
            <div class="control-group">
              <label class="control-label col-sm-4" for="pname">Patient's Name:</label>
              <div class="controls col-sm-8">
                <input type="text" class="form-control" placeholder="Patient's Full Name" id="pname" name="pname" value="<?php if ($disp_val) echo $pname; else echo ''; ?>" required data-validation-required-message="Patient's Name is required" minlength=3 data-validation-minlength-message="Patient's Name appears too short. Please provide your full name" />
                <p class="help-block"></p>
              </div>
            </div>  
            <div class="control-group">
              <label class="control-label col-sm-4" for="gender"> Patient's Gender:</label>
                <div class="controls col-sm-8">
                  <label class="radio-inline"><input type="radio" name="gender" value="Male" <?php echo $mchkd; ?> />Male</label>
                  <label class="radio-inline"><input type="radio" name="gender" value="Female" <?php echo $fchkd; ?> />Female</label>
                  <label class="radio-inline"><input type="radio" name="gender" value="Transgender" <?php echo $tchkd; ?> />Transgender</label>
                  <p class="help-block"></p>
                </div>
            </div>  
            <div class="control-group">
              <label class="control-label col-sm-4" for="age"> Patient's Age (In Years):</label>
                <div class="controls col-sm-8">
                  <input type="number" class="form-control" placeholder="Age (in years)" id="age" name="age" value="<?php if ($disp_val) echo $age; else echo ''; ?>" required data-validation-required-message="Patient's Age is required" min=1 max= 99  />
                  <p class="help-block"></p>
                </div>
            </div>  
            <div class="control-group">
              <label class="control-label col-sm-4" for="email"> Email Id:</label>
                <div class="controls col-sm-8">
                  <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="<?php if ($disp_val) echo $email; else echo ''; ?>" required data-validation-required-message="Email id is required" data-validation-email-message="Please enter valid email id" />
                  <p class="help-block"></p>
                </div>
            </div>  
            <div class="control-group">
              <label class="control-label col-sm-4" for="contact"> Contact No:</label>
                <div class="controls col-sm-8">
                  <input type="text" class="form-control" placeholder="Telephone/ Mobile No" id="contact" name="contact" value="<?php if ($disp_val) echo $contact; else echo ''; ?>" required data-validation-required-message="Patient's Contact No is required" />
                  <p class="help-block"></p>
                </div>
            </div>  
            <div class="control-group">
              <label class="control-label col-sm-4" for="address"> Communication Address:</label>
              <div class="controls col-sm-8">
                <input type="text" class="form-control" placeholder="Flat/Building No, Street, Post Office, Locality" id="address" name="address" value="<?php if ($disp_val) echo $address; else echo ''; ?>" />
                <input type="text" class="form-control" placeholder="City" id="city" name="city" value="<?php if ($disp_val) echo $city; else echo ''; ?>" required data-validation-required-message="City is required" />
                <input type="text" class="form-control" placeholder="Postal Code" id="pin" name="pin" value="<?php if ($disp_val) echo $pin; else echo ''; ?>" required data-validation-required-message="Postal Code is required" />
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label col-sm-4" for="disease"> Brief Description about the Patient's Disease:</label>
              <div class="controls col-sm-8">
                <textarea rows="2" cols="100" class="form-control" id="disease" name="disease" required data-validation-required-message="Please provide details (10 to 255 characters)" minlength=10 maxlength=255 placeholder="Brief Description about the Disease" ><?php if ($disp_val) echo $disease; else echo ''; ?></textarea>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label col-sm-4" for="complaints"> Patient's Chief Complaints:</label>
              <div class="controls col-sm-8">
                <textarea rows="2" cols="100" class="form-control" id="complaints" name="complaints" required data-validation-required-message="Please provide details (10 to 255 characters)" minlength=10 maxlength=255 placeholder="Please share about complaints you are facing" ><?php if ($disp_val) echo $complaints; else echo ''; ?></textarea>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label col-sm-4" for="duration"> Duration:</label>
              <div class="controls col-sm-8">
                <textarea rows="2" cols="100" class="form-control" id="duration" name="duration" required data-validation-required-message="Please provide details (10 to 255 characters)" maxlength=255 placeholder="Please share about how long you are suffering from in years, months, days etc." ><?php if ($disp_val) echo $duration; else echo ''; ?></textarea>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label col-sm-4" for="diet"> Patient's diet pattern in detail:</label>
              <div class="controls col-sm-8">
                <textarea rows="2" cols="100" class="form-control" id="diet" name="diet" maxlength=255 placeholder="Vegiterian/ Non Vegiterian, Frequency per week/month etc." ><?php if ($disp_val) echo $diet; else echo ''; ?></textarea>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label col-sm-4" for="habits"> Patient's Habits:</label>
              <div class="controls col-sm-8">
                <textarea rows="2" cols="100" class="form-control" id="habits" name="habits" maxlength=255 placeholder="Smoking, Tobaco, Alcohal etc. with frequency per week/ month/ year" ><?php if ($disp_val) echo $habits; else echo ''; ?></textarea>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label col-sm-4" for="workingstyle"> Patient's Working Style:</label>
              <div class="controls col-sm-8">
                <textarea rows="2" cols="100" class="form-control" id="workingstyle" name="workingstyle" maxlength=255 placeholder="Sitting, Standing Or Travelling; Night Duty If Any Mention It"><?php if ($disp_val) echo $workingstyle; else echo ''; ?></textarea>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label col-sm-4" for="alergic"> Alergic to any Drug?:</label>
              <div class="controls col-sm-8">
                <textarea rows="2" cols="100" class="form-control" id="alergic" name="alergic" maxlength=255 placeholder="Is Patient alergic to any drug? please mention it" ><?php if ($disp_val) echo $alergic; else echo ''; ?></textarea>
                <p class="help-block"></p>
              </div>
            </div>
            <div id="success"> </div> <!-- For success/fail messages -->
            <div class="col-sm-offset-4 col-sm-8">
              <input type="submit" class="btn btn-primary" name="act" value="Submit Detais" />
              <input type="reset" class="btn btn-default" />
              <input type="hidden" name="" value="" />
              <!--button type="submit" class="btn btn-primary pull-right">Send</button><br /-->
            </div>
          </form>
        </div>
        <div class="col-sm-2"></div>
      </div>
		</div>
	</section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <h3 class="widgetheading">Our Contact</h3>
            <address>
              <strong>SHASHWATI</strong> - Ano Rectal Hospital<br>
              201, Varna Building, Near Heena Garden<br>
              Behind University, Gandhari
              Kalyan West Pin-421301<br>
              Maharashtra, IN.
            </address>
            <p>
              <i class="icon-phone"></i> (91) 922-363-6313 <br>
              <i class="icon-envelope-alt"></i> info@shashwatiinpiles.com
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="widget">
            <h3 class="widgetheading">Consulting Hours</h3>
            <ul class="link-list">
              <li><a href="#">Morning: 10:00 am to 01:00 pm</a></li>
              <li><a href="#">Evening: 05:00 pm to 09:30 pm</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="widget">
            <h5 class="widgetheading">Location Map</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1883.3350044722986!2d73.13695285040131!3d19.253208216278594!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1461789286915" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!--ul class="link-list">
              <li><a href="#">Latest Events</a></li>
              <li><a href="#">Terms and conditions</a></li>
              <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Contact us</a></li>
            </ul-->
          </div>
        </div>
      </div>
    </div>
    <div id="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="copyright">
              Copyright &copy; <a href="http://www.shashwatiinpiles.com"><strong>SHASHWATI</strong> - Ano Rectal Hospital</a> 2010-2016 All right reserved.
              <ul class="social-network">
                <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <p><span class="pull-right">Maintained by: <a href="http://www.dgsol-in.com" target="_blank"><strong>DGSOL InfoTech</strong></a></span></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/consultation.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>