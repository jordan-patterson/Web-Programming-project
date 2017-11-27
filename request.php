<?php
	$active_page="request";
	$page_title="Request";
	$page_content="
		<center><h1 class=\"pge-h\">Request</h1></center>
		<center>
			<form action=\"send-request.php\" method=\"post\">
				<div class=\"fel\">
					<label><h5>Name</h5></label>
					<input class=\"text-inp\" type=\"text\" name=\"name\" placeholder=\"enter your name\" required>
				</div>
				<div class=\"fel\">
					<label><h5>Company Name</h5></label>
					<input class=\"text-inp\" type=\"text\" name=\"companyName\" placeholder=\"enter company name\" required>
				</div>
				<div class=\"fel\">
					<label><h5>Email</h5></label>
					<input class=\"text-inp\" type=\"email\" name=\"email\" 	placeholder=\"enter your email\" required>
				</div>
				<div class=\"fel\">
					<label><h5>Phone-Number eg. (876)123-4567</h5></label>
					<input class=\"text-inp\" type=\"tel\" name=\"number\" 	placeholder=\"enter phone number\" required pattern=\"(\d\d\d)\d\d\d-\d\d\d\d\">
				</div>
				<div class=\"fel\">
					<label><h5>Select your desired service (You can select more than 1)</h5></label>
					<select id=\"plans\">
						<option>Select service as desired...</option>
						<option>Static Website - Small $12500 JA</option>
						<option>Static Website - Large $17500 JA</option>
						<option>Double-Pack Plan - Small $25000 JA </option>
						<option>Double-Pack Plan - Large $40000 JA</option>
						<option>Search Engine Optimization - $5000 JA</option>
					</select>
				</div>
				<div class=\"fel\">
					<label><h5>Selected</h5></label>
					<textarea class=\"text-inp\" id=\"selected\" name=\"services\" readonly></textarea>
				</div>
				<div class=\"fel\">
					<label><h5>Final Price</h5></label>
					<input class=\"text-inp\" id=\"fprice\" type=\"text\" name=\"price\" readonly>
				</div>
				<div class=\"fel\">
					<label><h5>Details of Request</h5></label>
					<textarea class=\"text-inp\" name=\"details\" placeholder=\"Enter something here . .\" required></textarea>
				</div>
				<input id=\"submit\" type=\"submit\" name=\"submit\" value=\"Submit Request\">
			</form>
		</center>
	";
	include "template.php";
?>