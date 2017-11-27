<?php
	$active_page="feedback";
	$page_title="Feedback";
	$page_content="
		<center><h1 class=\"pge-h\">Feedback</h1></center>
		<center>
		<form action=\"feedback-send.php\" method=\"post\">
			<div class=\"fel\">
				<label><h5 >Name</h5></label>
				<input class=\"text-inp\" type=\"text\" name=\"name\" placeholder=\"enter your name\" required>
			</div>
			<div class=\"fel\">
				<label><h5>Email</h5></label>
				<input class=\"text-inp\" type=\"email\" name=\"email\" placeholder=\"enter your email\" required>
			</div>
			<div class=\"fel\">
				<label><h5>Message</h5></label>
				<textarea class=\"text-inp\" name=\"message\" placeholder=\"Enter something here . .\" required></textarea>
			</div>
			<input id=\"submit\" type=\"submit\" name=\"submit\" value=\"Send Message\">
		</form>
		</center>
	";
	include "template.php";
?>