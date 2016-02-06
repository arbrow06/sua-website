<?php
$title = ' - Services';
$extra_meta = FALSE;
$extra_foot = FALSE;
include("includes\header.inc.php");
?>
        <div id="main" class="clearfix">
            <div class="container_12">
                
                 <div class="grid_8">
                 
                 <h2>Services</h2>
                 <p>While much about the way SUA operates has changed over the years, the goals have remained the same. Founded to provide emergency medical services to the Syracuse University campus back in 1973, SUA is proud to continue to operate to protect the students, faculty and staff of the University. </p>
                 
                                    <div class="grid_4 alpha">
                    	<ul class="iconlist clean">
                        	<li class="clearfix">
								<img src="./images/icons/plus32.png" alt="Icon" class="left" />
                            	<h5><a href="service.php?type=ambulance">Emergency Response & Transport</a></h5>
                                <p>24-hour a day student operated and dispatched service that responds to more than 1,500 emergencies a year, providing intermediate life support, transport, rapid cardiac defibrillation, as well as non-emergency transportation.
</p>
                            </li>
                            <li class="clearfix">
								<img src="./images/icons/home32.png" alt="Icon" class="left" />
                            	<h5><a href="service.php?type=transport">Non-Emergency Medical Transport</a></h5>
                                <p>MTS provides students with free transport to local area doctors and hospitals for appointments, transportation to pharmacies for prescription pick-ups, as well as transportation to and from student's residences and classes.
</p>
                            </li>
                            
                            
                        </ul>
                    </div>
                    
                    <div class="grid_4 omega">
                    	<ul class="iconlist clean">
                        	<li class="clearfix">
								<img src="./images/icons/users32.png" alt="Icon" class="left" />
                        	    <h5><a href="service.php?type=mci">Mass Casualty Incident Response</a></h5>
                                <p>SUA is currently one of two agencies in the county to have MCI response capabilities. Put into service in 1999, SUA's trailer is outfitted to respond to mutual aid for large or small scale multiple patient catastrophes.
</p>
       </li>
                            <li class="clearfix">
								<img src="./images/icons/slide32.png" alt="Icon" class="left" />
								<h5><a href="service.php?type=events">Standby Event Medical Services</a></h5>
                                <p>Special event standby services are provided by request for major campus events. Ambulance crews provide services for major Carrier Dome, sports and other special events with attendance exceeding 5,000+ spectators.
</p>

                            </li>
                        </ul>
                    </div>
                    
                </div>

					                    
                </div><!--//grid_8-->
				
				
                <div class="grid_4">
					
					<div class="widget">
                    	<h3 class="widgettitle">More Services</h3>
                        <ul>
                        <ul>
							<li><a href="service.php?type=ambulance">Emergency Response</a></li>
							<li><a href="service.php?type=transport">Medical Transport</a></li>
							<li><a href="service.php?type=events">Special Events</a></li>
							<li><a href="service.php?type=mci">MCI Response</a></li>
						</ul>
						</ul>
						<div class="clear"></div><!--//clear-->
                    </div>
					
					<div class="widget textwidget">
                    	<h3 class="widgettitle">Other University Departments</h3>
                    	
					<?php include ("includes/departments.inc") ?>
                        
                    </div>


                    </div>                  
					
                </div><!--//grid_4-->



			</div><!-- //container_12 -->
        </div><!-- //main -->
<?php
include("includes/footer.inc.php");
?>