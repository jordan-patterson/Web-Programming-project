<?php
	$active_page="members";
	$page_title="Members";
	$page_content="
	<style>body{background-color#383a3a;background-color:white;}.pge-h{color:black;}</style>
	<center><h1 class=\"pge-h\">Our Team</h1></center>
	<div id=\"member-box\" class=\"container-fluid\">
		<div class=\"row\">
			<div class=\"col-md-4\">
				<img class=\"mem-photo\" src=\"images/IMG_20171013_202506.jpg\">
				<br>
			</div>
			<div class=\"col-md-8\">
				<p class=\"mem-desc\">
					Name: Jordan Patterson<br>
					School: University of Technology, Jamaica<br>
					ID Number: 1600474<br>
					Age: 19<br>
					Citizenship: Jamaican<br>
					Courses Enrolled for the Current Semester:
					<ul class=\"mem-desc\">
						<li>Object Oriented Programming</li>
						<li>Web Programming</li>
						<li>Introductory Statistics</li>
						<li>Database Design</li>
					</ul>
					<p class=\"mem-desc\">Skills:
					<ul class=\"mem-desc\">
						<li>Python</li>
						<li>HTML,CSS</li>
						<li>Backend Web Development (Python Flask, PHP)</li>
						<li>Swimming</li>
					</ul>
					<p class=\"mem-desc\">Here is some <a href=\"https://bitbucket.org/jordantdk/\" target=\"_blank\">code</a>
				</p>
			</div>
		</div>
	</div>
	";
	include "template.php";
?>