<?php
	require_once ('globals.php');
  require_once ('functions.php');
  require_once ('contact.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Shashwati | Contact Us</title>
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
            <li><a href="consultation.php">Consultation</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
<!-- end header -->
	<section id="inner-headline">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-12">
  				<h2 class="pageTitle">Contact Us</h2>
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
				<div class="col-md-6">
          <h3>Our Contact</h3>
          <address>
            <strong>SHASHWATI</strong> - Piles and Fitsula Day Care Center<br>
            123, 1st Floor, Flower Valley<br>
            Khadakpada Circle, Kalyan West<br>
            Pin-421301 Maharashtra, IN.
          </address>
          <p>
            <i class="icon-phone"></i> (91) 922-363-6313 <br>
            <i class="icon-envelope-alt"></i> info@shashwatiinpiles.com
          </p>
          <hr>
          <h3>Consulting Hours</h3>
          <ul class="link-list">
            <li><a href="#">Morning: 10:00 am to 01:00 pm</a></li>
            <li><a href="#">Evening: 06:00 pm to 09:30 pm</a></li>
          </ul>
          <hr>
				</div>
  			<div class="col-md-6">
          <h3>Write to us</h3>
          <p>Please write to us for any kind of feedback/information you need.</p>
          <div class="alert alert-success hidden" id="contactSuccess">
            <strong>Success!</strong> Your message has been sent to us.
          </div>
          <div class="alert alert-error hidden" id="contactError">
            <strong>Error!</strong> There was an error sending your message.
          </div>
          <div class="contact-form">
            <form name="sentMessage" id="sentMessage" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" novalidate> 
              <div class="control-group">
                <label class"control-label" for="fullname"> Full Name:</label>
                  <div class="controls">
                    <input type="text" class="form-control" placeholder="Full Name" id="fullname" name="fullname" required data-validation-required-message="Your full name is required" minlength=3 data-validation-minlength-message="Your name appears too short. Please provide your full name"/>
                    <p class="help-block"></p>
                  </div>
              </div>  
              <div class="control-group">
                <label class"control-label" for="email"> Email Id:</label>
                  <div class="controls">
                    <input type="email" class="form-control" placeholder="Email" id="email" name="email" required data-validation-required-message="Your email id is required" data-validation-email-message="Please enter valid email id" />
                    <p class="help-block"></p>
                  </div>
              </div>  
              <div class="control-group">
                <label class"control-label" for="message"> Feedback/ Information:</label>
                  <div class="controls">
                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please provide your message (10 to 1000 characters)" minlength="10" data-validation-minlength-message="Your message is too small to understand. Please elaborate" maxlength=999 data-validation-maxlength-message="Please limit your message to max 1000 characters" ></textarea>
                    <p>Your message (maximum 1000 characters)</p>
                    <p class="help-block"></p>
                  </div>
              </div>     
              <div id="success"> </div> <!-- For success/fail messages -->
              <input type="submit" class="btn btn-primary" name="act" value="Send Email" />
              <!--button type="submit" class="btn btn-primary pull-right">Send</button><br /-->
            </form>
          </div>
          <!--script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script-->
          <!--div style="overflow:hidden;height:500px;width:600px;">
  	        <div id="gmap_canvas" style="height:500px;width:600px;"></div>
  	          <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
  	          <a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a>
          </div-->
          <!--script type="text/javascript">function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
          </script-->
  				<!--iframe src="https://www.google.com/maps/d/embed?mid=zoeRlFyCF6JA.k34PVeEq6lKg" width="640" height="480"></iframe-->
  			</div>
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
              <li><a href="#">Evening: 06:00 pm to 09:30 pm</a></li>
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
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!--script src="contact/jqBootstrapValidation.js"></script>
<script src="contact/contact_me.js"></script-->
<script src="js/jqBootstrapValidation.js"></script>
<!--script src="js/contact.js"></script-->
<script>
  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
</script>
<script src="js/custom.js"></script> 
</body>
</html>