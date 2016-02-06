<?php
$title = ' - AED Locations';
$extra_meta = FALSE;
$extra_foot = FALSE;
include("includes\header.inc.php");
?>
<div id="main" class="clearfix">
    <div class="container_12">
		<div class="grid_8">
		<!-- contact form -->
		<script type="text/javascript">var host = (("https:" == document.location.protocol) ? "https://secure." : "http://");document.write(unescape("%3Cscript src='" + host + "wufoo.com/scripts/embed/form.js' type='text/javascript'%3E%3C/script%3E"));</script>
		<script type="text/javascript">
			var s7x3w7 = new WufooForm();
			s7x3w7.initialize({
			'userName':'sua', 
			'formHash':'s7x3w7', 
			'autoResize':true,
			'height':'802'});
			s7x3w7.display();
		</script>
		<!-- end contact form -->             
		</div>
		<div class="grid_4">
			<div class="widget">
				<h3 class="widgettitle">Where To Find Us</h3>
				<a href="http://maps.google.com/maps/place?cid=14595700020521264051"><img src="images/map.jpg"></a>
				<br/><br/>
				<p>Syracuse University Ambulance</p>
				<p>111 Waverly Avenue</p>
				<p>Syracuse, NY 13244</p>
			</div>
			<div class="widget">
				<h3 class="widgettitle">Phone Numbers</h3>
				<p>Emergency</p>
				<p><strong>(315) 443-4299</strong></p>
				<br/>                    
				<p>Business / Medical Transport</p>
				<p><strong>(315) 443-4566</strong></p>
			</div>
			<div class="widget">
				<h3 class="widgettitle">Important Links</h3>
				<div id="promo_44">
					<ul>
					<!-- specify width/height when using HTML to help out older browsers slide HTML content -->
						<li class="clearfix" style="width:300px; height:55px;">
							<p><strong><a href="http://students.syr.edu/health">SU Health Services</a></strong><br />(315) 443-9005</p>
						</li>
						<li class="clearfix hidden" style="width:300px; height:55px;">
							<p><strong><a href="http://publicsafety.syr.edu">SU Dept. of Public Safety</a></strong><br />(315) 443-2224</p>      
						</li>                                
						<li class="clearfix hidden" style="width:300px; height:55px;">
							<p><strong><a href="http://ruralmetro.com">Rural/Metro Medical Services</a></strong><br />(315) 701-7016</p>
						</li>
						<li class="clearfix hidden" style="width:300px; height:55px;"
							<p><strong><a href="http://safety.syr.edu">SU Safety Department</a></strong><br />(315) 443-5474</p>
							</li>
					</ul>
					<p><a href="#" class="next">View Next&raquo;</a></p>
				</div>
						<script type="text/javascript">
							jQuery(function($){ $("#promo_44 UL").cycle({ /* add options here */ fx:'scrollUp',next:'#promo_44 .next', timeout:0, speed:500 }); });
						</script>
                    </div>

                
                </div>
			</div>
        </div>
	
	<!-- end content -->
<?php
include("includes/footer.inc.php");
?>