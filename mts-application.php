<?php
$title = ' - MTS Driver Application';
$extra_meta = FALSE;
$extra_foot = FALSE;
include("includes\header.inc.php");
?>     
        <div id="main" class="clearfix">
            <div class="container_12">
                
                 <div class="grid_8">
                 
<div id="wufoo-m7x1m7">
Fill out my <a href="http://sua.wufoo.com/forms/m7x1m7">online form</a>.
</div>
<script type="text/javascript">var m7x1m7;(function(d, t) {
var s = d.createElement(t), options = {
'userName':'sua', 
'formHash':'m7x1m7', 
'autoResize':true,
'height':'3067',
'async':true,
'header':'show'};
s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
s.onload = s.onreadystatechange = function() {
var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
try { m7x1m7 = new WufooForm();m7x1m7.initialize(options);m7x1m7.display(); } catch (e) {}};
var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
})(document, 'script');</script>
                 
					                    
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