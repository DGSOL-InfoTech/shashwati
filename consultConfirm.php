<?php
	require_once ('globals.php');
  if (isset($_POST['act']) && $_POST['act'] == "Submit Detais") {
    $pname = filter_input(INPUT_POST, 'pname', FILTER_SANITIZE_STRING);
    $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $contact = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $pin = filter_input(INPUT_POST, 'pin', FILTER_SANITIZE_STRING);
    if (empty($address)) $paddress = $city.', '.$pin; else $paddress = $address.', '.$city.', '.$pin;
    $disease = filter_input(INPUT_POST, 'disease', FILTER_SANITIZE_STRING);
    $disease = nl2br($disease);
    $complaints = filter_input(INPUT_POST, 'complaints', FILTER_SANITIZE_STRING);
    $complaints = nl2br($complaints);
    $duration = filter_input(INPUT_POST, 'duration', FILTER_SANITIZE_STRING);
    $duration = nl2br($duration);
    $diet = filter_input(INPUT_POST, 'diet', FILTER_SANITIZE_STRING);
    $diet = nl2br($diet);
    $habits = filter_input(INPUT_POST, 'habits', FILTER_SANITIZE_STRING);
    $habits = nl2br($habits);
    $workingstyle = filter_input(INPUT_POST, 'workingstyle', FILTER_SANITIZE_STRING);
    $workingstyle = nl2br($workingstyle);
    $alergic = filter_input(INPUT_POST, 'alergic', FILTER_SANITIZE_STRING);
    $alergic = nl2br($alergic);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $message = nl2br($message);
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
            <li><a href="contact.php">Contact</a></li>
            <li class="active"><a href="consultation.php">Consultation</a></li>
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
          <h3>You have submitted following details</h3>
          <table>
            <tr><td> Patient's Name:</td><td><?php echo $pname; ?></td></tr>
            <tr><td> Patient's Gender:</td><td><?php echo $gender; ?></td></tr>
            <tr><td> Patient's Age:</td><td><?php echo $age; ?></td></tr>
            <tr><td> Email ID:</td><td><?php echo $email; ?></td></tr>
            <tr><td> Contact No:</td><td><?php echo $contact; ?></td></tr>
            <tr><td> Address:</td><td><?php echo $paddress; ?></td></tr>
            <tr><td> Patient's Disease:&nbsp;&nbsp;</td><td><?php echo $disease; ?></td></tr>
            <tr><td> Complaints:</td><td><?php echo $complaints; ?></td></tr>
            <tr><td> Duration:</td><td><?php echo $duration; ?></td></tr>
            <tr><td> Diet Patern:</td><td><?php echo $diet; ?></td></tr>
            <tr><td> Habits:</td><td><?php echo $habits; ?></td></tr>
            <tr><td> Working Style:</td><td><?php echo $workingstyle; ?></td></tr>
            <tr><td> Alergic to Drug:</td><td><?php echo $alergic; ?></td></tr>
            <tr><td></td><td></td></tr>
          </table>
          <hr>
          <h3>Our Terms and Conditions</h3>
          <ol>
            <li>You will get response via email within few hours.</li>
            <li>You will get the best treatment for the same.</li>
            <li>If required you will be contacted by us and there will be more discussions between you and our doctors.</li>
            <li>If Ayurvedic medicines will be required for your treatment then it will be provided to you within shortest possible time. </li>
            <li>Cost of Medicine shall be informed to you in advance.</li>
            <li>Payment should be via NEFT/ RTGS/ IMPS to the following A/c Details</li>
            <table class="col-sm-offset-1">
              <tr><td>Name of Bank:&nbsp;&nbsp;</td><td>State bank Of India</td></tr>
              <tr><td>Branch:</td><td>Khadahpada Branch, Kalyan West</td></tr>
              <tr><td>A/c No:</td><td>31051569613</td></tr>
              <tr><td>IFSC Code:</td><td>SBIN0011159</td></tr>
              <tr><td>Pay to:</td><td>Dr. Bharat Kashinath Bhadane</td></tr>
            </table>
            <li>Delivery of the medicine shall be done after the payment is received by us immediately.</li>
            <li>Along with the medicine You will receive the proper information about the doeses and a proper Diet Chart</li>
            <li>Delivery charges will always be extra and shall be informed in advance</li>
            <li>All Payments are non-refundable</li>
            <li>All due diligence will be taken to send the delivery of medicines. However, we will not be responcible for the dilivery problems due to Courier mistakes  </li>
          </ol>
        </div>
        <div class="col-sm-offset-2 col-sm-8">
          <form class="form-horizontal" role="form" name="consultRequest" id="consultRequest" action="consultation.php" method="post"> 
           <div id="success"> </div> <!-- For success/fail messages -->
            <div class="col-sm-offset-4 col-sm-8">
              <input type="submit" class="btn btn-primary" name="act" value="Accept and Submit" />
              <input type="submit" class="btn btn-primary" name="act" value="Go Back" />
              <input type="hidden" name="pname" value="<?php echo $pname; ?>" />
              <input type="hidden" name="gender" value="<?php echo $gender; ?>" />
              <input type="hidden" name="age" value="<?php echo $age; ?>" />
              <input type="hidden" name="email" value="<?php echo $email; ?>" />
              <input type="hidden" name="contact" value="<?php echo $contact; ?>" />
              <input type="hidden" name="address" value="<?php echo $address; ?>" />
              <input type="hidden" name="city" value="<?php echo $city; ?>" />
              <input type="hidden" name="pin" value="<?php echo $pin; ?>" />
              <input type="hidden" name="disease" value="<?php echo $disease; ?>" />
              <input type="hidden" name="complaints" value="<?php echo $complaints; ?>" />
              <input type="hidden" name="duration" value="<?php echo $duration; ?>" />
              <input type="hidden" name="diet" value="<?php echo $diet; ?>" />
              <input type="hidden" name="habits" value="<?php echo $habits; ?>" />
              <input type="hidden" name="workingstyle" value="<?php echo $workingstyle; ?>" />
              <input type="hidden" name="alergic" value="<?php echo $alergic; ?>" />
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
            <h5 class="widgetheading">Quick Links</h5>
            <ul class="link-list">
              <li><a href="#">Latest Events</a></li>
              <li><a href="#">Terms and conditions</a></li>
              <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>
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