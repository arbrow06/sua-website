<?php
$title = ' - News';
$extra_meta = FALSE;
$extra_foot = FALSE;
include("includes\header.inc.php");
?>     
     <!-- start content -->
	
        <div id="main" class="clearfix">
            <div class="container_12">
                
                
                <div class="grid_8">
       <!--start of .post -->
       			<?php include('news/rss2html.php') ?>
       <!--end of .post -->


				</div><!--//grid_8-->
                
                <div class="grid_4">
                	

                    
                    <div class="widget">
                    	<h3 class="widgettitle">In The News</h3>
		<p>Syracuse University Ambulance has been trying to make an impact on campus since it's creation in 1973. We are always pleased when our services make news or are recognized by the Syracuse University community.</p>
                    </div>
                    
                       <div class="widget">
                    	<h3 class="widgettitle">Other University Departments</h3>
					<?php include("includes/departments.inc") ?>
                    </div>   
                    
                    
                         <div class="widget">
                    	<h3 class="widgettitle">Other EMS Agencies</h3>
					<?php include("includes/agencies.inc") ?>
                    </div>                       
                    
                                                  
                </div><!--//grid_4-->
                
                
                </div>
                </div>


        
    <!-- end content -->
<?php
include("includes/footer.inc.php");
?>