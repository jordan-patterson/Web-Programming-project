<?php
	$active_page="home";
	$page_title="Home";
	$page_content="
	<style>#welcome-h{color:#f4b042}</style>
		<div id=\"container-div\" class=\"container-fluid\">
			<img id=\"fpage-img\" src=\"images/index2.jpg\">
		</div>
		<div class=\"container-fluid\" id=\"para-container\">
			<h1 id=\"welcome-h\">Welcome to The Binaries!</h1>
			<div class=\"container\">
				<p id=\"intro-paragraph\">We are a team of software engineers who work together to achieve a specific goal, satisfying you, our client. We build websites, front and back end. We also do SEO (search engine optimaization) as a part of our package so that your site can be seen in the top results of the most popular search engines.</p><br>
			</div>
		</div>
	";
	include "template.php";
?>