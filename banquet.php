<?php
$title = '\'s Annual Banquet';
$extra_meta = FALSE;
$extra_foot = FALSE;
include("includes\header.inc.php");
?>
<!-- start content -->
	<div id="main" class="clearfix">
		<div class="container_12">     
			<div class="grid_12">
			<?php
			if ($banquet_form_active == TRUE)
				echo $banquet_rsvp . $banquet_code_snippet;
			else
				echo "<h4>RSVP for the upcoming banquet is not available. Please check back soon.</h4>";
			?>
			</div><!--//grid_12-->
		</div><!-- //container_12 -->
	</div><!-- //main -->
<!-- end content -->
<?php
include("includes/footer.inc.php");
?>