
<?php
$title = ' - Ride Out Program';
$extra_meta = FALSE;
$extra_foot = FALSE;
include("includes\header.inc.php");
?>
<div id="main" class="clearfix">
            <div class="container_12">
                
                 <div class="grid_8">
                 
<script type="text/javascript">var host = (("https:" == document.location.protocol) ? "https://secure." : "http://");document.write(unescape("%3Cscript src='" + host + "wufoo.com/scripts/embed/form.js' type='text/javascript'%3E%3C/script%3E"));</script>

<script type="text/javascript">
var z7x2m3 = new WufooForm();
z7x2m3.initialize({
'userName':'sua', 
'formHash':'z7x2m3', 
'autoResize':true,
'height':'1702', 
'ssl':true});
z7x2m3.display();
</script>
                 
					                    
                </div><!--//grid_8-->
				
				
                <div class="grid_4">
					
					<div class="widget">
                    	<h3 class="widgettitle">More Services</h3>
                        <ul>
								<li><a href="events.php">Upcoming Events</a></li>
								<li><a href="outreach.php">Outreach</a></li>
								<li><a href="aed.php">AED Locations</a></li>
								<li><a href="event.php?$type=emt">EMT Class</a></li>
								<li><a href="event.php?$type=cpr">CPR Training</a></li>
								<li><a href="rideout.php">Ride-Out Program</a></li>
							
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