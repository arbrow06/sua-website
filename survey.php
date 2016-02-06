<?php
$title = ' - Application';
$extra_meta = FALSE;
$extra_foot = FALSE;
include("includes\header.inc.php");
?>       
        <div id="main" class="clearfix">
            <div class="container_12">
                
                
                
                <div class="grid_8">
            <script type="text/javascript">var host = (("https:" == document.location.protocol) ? "https://secure." : "http://");document.write(unescape("%3Cscript src='" + host + "wufoo.com/scripts/embed/form.js' type='text/javascript'%3E%3C/script%3E"));</script>

<script type="text/javascript">
var z7x2q5 = new WufooForm();
z7x2q5.initialize({
'userName':'sua', 
'formHash':'z7x2q5', 
'autoResize':true,
'height':'4428', 
'ssl':true});
z7x2q5.display();
</script>
                 
                </div><!--//grid_12-->


				<div class="grid_4">
                	<div class="widget">
                    	<h3 class="widgettitle">What's next?</h3>
             		<p>After completing this application, you will receive an email confirmation. After the submission deadline on <strong><?php echo $appSubmissionDate; ?></strong>, the applications will be reviewed by our hiring committee and personnel supervisors and you will be contacted and instructed on how to continue through our interview process. </p>
             			<br/>
             		<p>Until all applications are submitted and the deadline has passed, no further information about the status of your application will be available. </p>
                    </div>
                </div>

			</div><!-- //container_12 -->
        </div><!-- //main -->
<?php
include("includes/footer.inc.php");
?>