<?php
include(".\config.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Syracuse University Ambulance<?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html" />
		<meta charset="UTF-8">
		<meta name="keywords" content="syracuse,university,ambulance,ems,medical,711" />
		<meta name="description" content="syracuse university ambulance" />
		<meta name="robots" content="index, follow" />
		<link rel="shortcut icon" href="../images/sua.ico">
		<link type="text/css" rel="stylesheet" href="../css/960.css" media="screen" /><!-- framework -->
		<link type="text/css" rel="stylesheet" href="../css/screen.css" media="screen" /><!-- main -->
		<link type="text/css" rel="stylesheet" href="../css/orange.css" media="screen" /><!-- color -->
		<link type="text/css" rel="stylesheet" href="../css/print.css" media="print" /><!-- print -->
		<link type="text/css" rel="stylesheet" href="../css/jquery.fancybox-1.3.4.css" media="screen" /><!-- lightbox -->
		<link type="text/css" rel="stylesheet" href="../css/button.css" media="screen" /><!-- buttons -->
		
		<!--[if lt IE 7]><link type="text/css" rel="stylesheet" href="../css/themes/ie6.css" media="screen" /><![endif]--> <!-- color -->
		<!--[if lt IE 7]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script><![endif]-->    

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript" src="../js/superfish-combined.js"></script>
		<script type="text/javascript" src="../js/jquery.cycle.all.min.js"></script>
		<script type="text/javascript" src="../js/jquery.fancybox-1.3.4.pack.js"></script>
		<script type="text/javascript" src="../js/jquery.tweet.js"></script>
		<script type="text/javascript" src="../js/general.js"></script>
		<!-- <script type="text/javascript" src="../js/sortable.js"></script> -->
		<?php 
		if ($extra_meta)
			echo $extra_meta;
		?>
			
		
	</head>
	<body>
		<div id="outer" class="clearfix">
			<div id="topbar" class="clearfix">
				<div class="container_12">
					<div class="grid_6" style="width:410px">
					<p style="padding-top:5px;"><a class="modal-box" href="#modal_a"><strong>Emergency?&nbsp;</strong>Dial<strong> (315) 443-4299</strong> for immediate medical assistance.</a></p>
					</div>
					<!-- Popup box is closed within a hidden class, only opened when it is clicked-->
					<div class="hidden">
						<div id="modal_a" style="width:500px;">
							<h3>Dial (315) 443-4299 for immediate medical assistance. </h3>
							<p>In the event of a medical emergency, <strong>please remain calm.</strong> Call SUA and be prepared with some basic information:</p>
							<ul>
								<li>The address of the emergency.</li>
								<li>The phone number you're calling from.</li>
								<li>Exactly what happened.</li>
								<li>How many people are hurt.</li>
								<li>If anyone is already helping you.</li>
							</ul>
							Follow any and all instructions the dispatcher gives you and <strong>do not hang up until you have been told to do so.</strong></p>
							<small><a href="" onClick="jQuery.fancybox.close();">Close Window</a></small>
						</div><!--modal-->
					</div><!--hidden-->
					<!-- end popup box -->
					<p align="right" style="padding-top:8px;" id="social">
						<?php
						//Link to application
						if( $application_active == TRUE )
							 echo '<a class="small button orange" href="join"><span>Apply Here</span></a>';
						?>
						<a href="http://facebook.com/suambulance" target="_blank"><img src="images/social/facebook.png"></a>
						<a href="http://twitter.com/suambulance" target="_blank"><img src="images/social/twitter.png"></a>
						<a href="http://suambulance.tumblr.com" target="_blank"><img src="images/social/tumblr.png"></a>
						<a href="http://instagram.com/suambulance" target="_blank"><img src="images/social/instagram.png"></a>
						<a href="http://www.linkedin.com/groups?mostPopular=&gid=3080653" target="_blank"><img src="images/social/linkedin.png"></a>
						<!--<a href="http://gplus.to/suambulance"><img src="images/social/plus.png"></a>-->
						<!--<a href="http://about.me/suambulance"><img src="images/social/aboutme.png"></a> -->
						<a href="http://vimeo.com/sua"><img src="images/social/vimeo.png" target="_blank"></a>
						<a href="http://sua.syr.edu/contact.php"><img src="images/social/email.png"></a>
						<!--<a href="http://suambulance.tumblr.com/rss"><img src="images/social/rss.png"></a>-->
					</p>
				</div><!--container_12-->
			</div><!--topbar-->
		<!--outer-->
			<div id="header" class="clearfix">
				<div class="container_12">
					<div class="grid_12" id="header-container">
						<div id="logo"><h1><a href="index.php" title="Home"><img src="../images/logo.png" alt="SUA" /></a></h1>
						</div><!--logo-->
						<?php include("menu.inc") ?>
					</div><!grid_12-->
				</div><!--container_12-->
			</div><!--header-->
		<!--no close on outer-->
