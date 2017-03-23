<?php
  require_once ('globals.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Shashwati | Facilities</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://www.dgsol-in.com" />
 
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<!--link href="css/jcarousel.css" rel="stylesheet" /-->
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
            <li class="active"><a href="facilities.php">Facilities</a></li>
            <li><a href="info.php">Information</a></li>
            <li><a href="consultation.php">Consultation</a></li>
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
				<h2 class="pageTitle">Facilities</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
		<div class="container content">		
      <!-- Service Blcoks -->
      <div class="row service-v1 margin-bottom-40">
        <div class="col-md-4 md-margin-bottom-40">
          <img class="img-responsive" src="img/consultation1.jpg" alt="">   
          <h2>Consultation</h2>
          <p>Each and every patient and their relatives are provided with the details of the disease, the cause of the disease and the line of treatment up to their satisfaction.</p>        
        </div>
        <div class="col-md-4 md-margin-bottom-40">
          <img class="img-responsive" src="img/waitingarea1.jpg" alt="">            
          <h2>Waiting Area</h2>
          <p>Completely ventilated and comfortable waiting area for relatives of the patients during consultation or operating procedures</p>        
        </div>
        <div class="col-md-4 md-margin-bottom-40">
          <img class="img-responsive" src="img/guidence1.jpg" alt="">  
          <h2>Guidence</h2>
          <p>Every doubts about the disease and its treatment are resolved by one to one counseling. In addition every information and status of the disease are provided to them and their relatives periodically up to their satisfaction.</p>        
        </div>
      </div>
      <div class="row service-v1 margin-bottom-40">
        <div class="col-md-4 md-margin-bottom-40">
          <img class="img-responsive" src="img/OT2.jpg" alt="">  
          <h2>Operation Theatre</h2>
          <p>Operation Theatre with all necessary equipment are completely hygienic and sterile as per standard to provide our patients required confidence.</p>        
        </div>
        <div class="col-md-4 md-margin-bottom-40">
          <img class="img-responsive" src="img/ward1.jpg" alt="">  
          <h2>Day Care Ward</h2>
          <p>Eco-friendly, ventilated, clean and hygienic Day Care Ward facility for the patient to be released the same day post operation procedures.</p>        
        </div>
        <div class="col-md-4 md-margin-bottom-40">
          <img class="img-responsive" src="img/spward3.jpg" alt="">  
          <h2>Delux Rooms</h2>
          <p>Eco-friendly, ventilated, clean and hygienic special room facility for the patient who need extra comfort and privacy.</p>        
        </div>
      </div>
      <div class="row service-v1 margin-bottom-40">
        <div class="col-md-4 md-margin-bottom-40">
          <img class="img-responsive" src="img/ayurvedicmedicine1.jpg" alt="">  
          <h2>Ayurvedic Medicines</h2>
          <p>Ayurvedic Medication is always preferred to cure all kinds of acute diseases. These medicines are given from our centers only.</p>        
        </div>
        <div class="col-md-4 md-margin-bottom-40">
          <img class="img-responsive" src="img/budget1.jpg" alt="">  
          <h2>Affordable Packages</h2>
          <p>All packages offered by us are affordable to a common man and every patient can get wonderful result within their budget.</p>        
        </div>
        <div class="col-md-4 md-margin-bottom-40">
          <img class="img-responsive" src="img/diet1.jpg" alt="">  
          <h2>Complete Diet Chart</h2>
          <p>Every patients are given with the complete diet plan according to the requirement of respective disease.</p>        
        </div>
      </div>
      <!-- End Service Blcoks -->
    </div>
  </section>
  <footer>
    <?php include ('includes/footer.inc');?>
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
<script src="js/custom.js"></script>
<script src="js/googlemap.js"></script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJq4WOJNGuEJSBkjDLn5Hxw6Lp7jaYZfo&callback=initMap">
</script>
</body>
</html>