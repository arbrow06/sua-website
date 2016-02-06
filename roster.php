<?php
$title = ' - Member Roster';
$extra_meta = FALSE;
$extra_foot = FALSE;
include("includes\header.inc.php");
?>

<!-- Content -->
	<div id="main" class="clearfix">
		<div class="container_12">
			<div class="grid_8">
				<?php @include ("includes/members/" . $_GET{'type'} . ".inc"); ?>
			</div><!--//grid_8-->
				<div class="grid_4">
					<div class="widget">
						<h3 class="widgettitle">View More Members:</h3>
							<ul>
								<li><a href="roster.php?type=active">Active</a></li>
								<hr />
								<li><a href="roster.php?type=supervisors">Supervisors</a></li>
								<hr />		
								<!-- <li><a href="roster.php?type=probationary">Probationary</a> <img style="padding-left:10px;margin-bottom:-3px;" src="images/new.png"/></li> 
								<hr /> -->
								<li><a href="roster.php?type=officers">Officers</a></li>
								<hr />
								<li><a href="roster.php?type=administrative">Administrative</a></li>
								<hr />
								<li><a href="roster.php?type=dispatch">Dispatchers</a></li>
								<hr />
								<li><a href="roster.php?type=faculty">Faculty</a></li>
								<hr />		
								<li><a href="structure.php">Structure</a></li>
								<hr />									
							</ul>
							<div class="clear"></div><!--//clear-->
					</div><!-- //widget -->
				</div><!--//grid_4-->
		</div><!-- //container_12 -->
	</div><!-- //main -->
<!-- end content -->
<?php
include("includes/footer.inc.php");
?>