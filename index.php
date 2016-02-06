<?php
$title = '';
$extra_meta = FALSE;
$extra_foot = FALSE;
include("includes\header.inc.php");
?>
<!-- start content -->

	 <div id="main" class="clearfix">

            <div class="container_12">

				<div class="grid_12">


					<!-- announcement area -->
					<?php 
						if ($announcementsOn == TRUE)
							echo $announce;
					?>
					<!-- end announcement area -->

					<div id="promo_01" class="promo-container primary-promo-container">

						<ul class="promo-navigation clean"></ul>

						<ul class="promos clean" style="position: relative; width: 940px; height: 306px; ">
					<!-- <li><a href="emsweek.php"><img src="./images/promos/emsweek-banner1.jpg" alt="Promo" /></a></li> -->

					<!-- HAPPY HOLIDAYS BANNER <li><a href="#"><img src="./images/promos/sua-happy-holidays.png" alt="Happy Holidays!" /></a></li> -->

							<li><a href="#"><img src="./images/promos/promo1.jpg" alt="Promo" /></a></li>
							<li class="hidden"><a href="#"><img src="./images/promos/promo2.jpg" alt="Promo" width="940" height="300" /></a></li>
							<li class="hidden"><a href="#"><img src="./images/promos/promo3.jpg" alt="Promo" width="940" height="300" /></a></li>
						</ul>

					</div>
					<script type="text/javascript">
						jQuery(function($){

							// Full options at http://jquery.malsup.com/cycle/options.html
							$('#promo_01 .promos').cycle({
								fx: 		'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
								pager: 		'#promo_01 .promo-navigation',
								pause: 		2,
								timeout:    4000
							});

						});
					</script>

						</div>

                <div class="grid_8">
                    <h2> </h2>
                    <p><strong>Syracuse University Ambulance</strong> is a SU Health Services-based student operated organization that responds to over 1,500 medical emergencies each year, providing intermediate life support, transport, rapid cardiac defibrillation as well as non-emergency transportation. SUA has been serving the Syracuse University community since 1973.</p>

                    <br/>

                    <div class="grid_4 alpha">
                    	<ul class="iconlist clean">
                        	<li class="clearfix">
								<img src="./images/icons/plus32.png" alt="Icon" class="left" />
                            	<h5>Emergency Response & Transport</h5>
                                <p>24-hour a day student operated and dispatched service that responds to more than 1,500 emergencies a year, providing intermediate life support, transport, rapid cardiac defibrillation, as well as non-emergency transportation.
</p>
                            </li>
                            <li class="clearfix">
								<img src="./images/icons/home32.png" alt="Icon" class="left" />
                            	<h5>Non-Emergency Medical Transport</h5>
                                <p>MTS provides students with free transport to local area doctors and hospitals for appointments, transportation to pharmacies for prescription pick-ups, as well as transportation to and from student's residences and classes.
</p>
                            </li>


                        </ul>
                    </div>

                    <div class="grid_4 omega">
                    	<ul class="iconlist clean">
                        	<li class="clearfix">
								<img src="./images/icons/users32.png" alt="Icon" class="left" />
                        	    <h5>Mass Casualty Incident Response</h5>
                                <p>SUA is currently one of two agencies in the county to have MCI response capabilities. Put into service in 1999, SUA's trailer is outfitted to respond to mutual aid for large or small scale multiple patient catastrophes.
</p>
       </li>
                            <li class="clearfix">
								<img src="./images/icons/slide32.png" alt="Icon" class="left" />
								<h5>Standby Event Medical Services</h5>
                                <p>Special event standby services are provided by request for major campus events. Ambulance crews provide services for major Carrier Dome, sports and other special events with attendance exceeding 5,000+ spectators.
</p>

                            </li>
                        </ul>
                    </div>

                   <!-- <img src="images/website-footer.png" /> -->

                </div>

                <div class="grid_4">
                    <div class="widget" style="width:300px;">
                    	<h3 class="widgettitle">Emergency Assistance</h3>
                        <p>We're available 24 hours a day to assist with emergency situations. If you're experiencing a medical emergency, please do not hesitate to contact us via one of the methods below.</p>
                        	<br />
                        <!-- <h2>Dial 711</h2> -->
                        <!-- <div class="phoneinfo">If you're calling from an <strong>on-campus phone</strong>.</div> -->

                        	<!-- <br /> -->

                        <h2>Dial (315) 443-4299</h2>
                        <div class="phoneinfo">If you're calling from any <strong>landline or cell phone</strong>.</div>

                        		<br /><br />

                       <h2>Dial #SU (#78)</h2>
                       <div class="phoneinfo">If you're calling from a <strong>cell phone</strong>.</div>

                    </div>

                   <div class="widget" style="width:300px;">
                    	<h3 class="widgettitle">Non-Emergency Assistance</h3>
                        <p>If you need to schedule a medical transport or need any other kind of assistance, please call the number below. <strong>Do NOT call the emergency numbers listed above for regular business.</strong></p>
                        	<br />
                        <h2>Dial (315) 443-4566</h2>
                        <div class="phoneinfo">For transports, questions and inquiries.</div>

                                          </div>

                </div>

            </div>

        </div>

    <!-- end content -->
<?php
include("includes/footer.inc.php");
?>