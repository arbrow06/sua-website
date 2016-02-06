<?php
$title = ' - Events';
$extra_meta = FALSE;
$extra_foot = FALSE;
include("includes\header.inc.php");
?>
<div id="main" class="clearfix">
            <div class="container_12">
                
                 <div class="grid_8">
					
                   <?php @include ("includes/events/" . $_GET{'type'} . ".inc"); ?>
                    
                </div><!--//grid_8-->
				
				
                <div class="grid_4">
					
					<div class="widget">
                    	<h3 class="widgettitle">More Information</h3>
                        <ul>
                        <ul>
								<li><a href="events.php">Upcoming Events</a></li>
								<li><a href="outreach.php">Outreach</a></li>
								<li><a href="aed.php">AED Locations</a></li>
								<li><a href="event.php?type=emt">EMT Class</a></li>
								<li><a href="event.php?type=cpr">CPR Training</a></li>
								<li><a href="rideout.php">Ride-Out Program</a></li>
							
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