<?php
$title = ' - Services';
$extra_meta = FALSE;
$extra_foot = FALSE;
include("includes\header.inc.php");
?>
        <div id="main" class="clearfix">
            <div class="container_12">
                
                 <div class="grid_8">
					
                   <?php @include ("includes/services/" . $_GET{'type'} . ".inc"); ?>
                    
                </div><!--//grid_8-->
				
				
                <div class="grid_4">
					
					<div class="widget">
                    	<h3 class="widgettitle">More Services</h3>
                        <ul>
							<li><a href="?type=ambulance">Emergency Response</a></li>
							<li><a href="?type=transport">Medical Transport</a></li>
							<li><a href="?type=events">Special Events</a></li>
							<li><a href="?type=mci">MCI Response</a></li>
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