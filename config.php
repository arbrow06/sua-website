<?php
//Error reporting
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

//loads into the header.inc.php file
$application_active = TRUE;
$appSubmissionDate = "February 10th";
//Promotions
$promotions = [
	"Natalie Montesano" => "Dispatch Trainer",
	"Sarah Linnertz" => "Driver FTO",
	"Lily Kim" => "Driver FTO",
	"Sean Lamble" => "Crew Chief",
	"Emily Griffin" => "Driver",
	"Shannon Salem" => "Crew Chief Trainer Progression",
	"Mackenzie Moranz" => "First Responder",
	"Lukas Moller" => "Crew Chief Trainer Progression"
];
//Banquet Form
$banquet_form_active = FALSE;
//Following code should be extracted from Wufoo
$banquet_code_snippet = "<script type=\"text/javascript\">var m7x1q9;(function(d, t) {
var s = d.createElement(t), options = {
'userName':'sua', 
'formHash':'m7x1q9', 
'autoResize':true,
'height':'846',
'async':true,
'header':'show'};
s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
s.onload = s.onreadystatechange = function() {
var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
try { m7x1q9 = new WufooForm();m7x1q9.initialize(options);m7x1q9.display(); } catch (e) {}};
var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
})(document, 'script');</script>";
$banquet_rsvp = '<div align="right">
					<span ><a class="medium button orange" href="mailto:suambulance.events@gmail.com"><span>Send Photos</span></a></span>
				</div>
				<div id="wufoo-m7x1q9">
					Fill out my <a href="http://sua.wufoo.com/forms/m7x1q9">online form</a>.
				</div>';
				
//Announcements Section
$announcementsOn = TRUE;
//Optional Announcements (Just place variable into $announce below
$custom = '<strong>Interested in joining SUA?</strong> We\'re looking for new members! <a class="small button orange" href="join"><span>Apply Now!</span></a>';
$join = '<strong>Interested in joining SUA?</strong> We\'re looking for new members! Applications Open August 1st, 2015!';
//<span class="right"><a class="small button orange" href="join"><span>Click Here To Apply</span></a></span>';
$newProbies = '<strong>Congratulations to our newest probationary class!</strong> 
<span class="right"><a class="small button orange" href="roster.php?type=probationary"><span>View Our Newest Members in Training</span></a></span>';
$nowHeartSafe = '<strong>SU has officially been recognized as a HEARTSafe Campus!</strong> Learn more about what that means.
<span class="right"><a class="small button orange" href="http://sua.syr.edu/news.php"><span>More Info.</span></a></span>';
$cprClass = '<strong>Register for HeartSaver CPR!</strong> HeartSaver CPR training will be offered during Health & Wellness Week.
<span class="right"><a class="small button orange" href="http://sua.syr.edu/event.php?type=cpr"><span>Register</span></a></span>';
$banquet = '<strong>Join us for our Annual Banquet!</strong> Alumni and guests who wish to attend should register for the 2014 banquet.
<span class="right"><a class="small button orange" href="http://sua.syr.edu/banquet.php"><span>Register</span></a></span>';
$ncemsf = '<strong>We\'re headed to Boston!</strong> This weekend, we\'re representing Syracuse at the <a href="http://ncemsf.org">National Collegiate EMS Conference</a>.
<span class="right"><a class="small button orange" href="http://twitter.com/search/ncemsf"><span>#NCEMSF</span></a></span>';
$pressSite = 'We\'ve created a new page on our website with recent news articles featuring SUA.
<span class="right"><a class="small button orange" href="http://sua.syr.edu/press.php"><span>View Page</span></a></span>';
$trafficAdvisory = 'University Avenue opens up to two-way traffic on <strong>Tuesday, July 3rd</strong>. Be cautious and observe posted traffic flow signs. 
<span class="right"><a class="small button orange" href="http://bit.ly/NfG980"><span>More Info</span></a></span>';
//Change announcement variable below
$announce = '<p class="message announce rounded clearfix">' . $custom . "</p>";

?>
