<!DOCTYPE html>
<html>
	<head>
		<title><?php echo"$page_title"?></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" href="images/shimg.png">
		<link href="https://fonts.googleapis.com/css?family=Acme|Bangers|Berkshire+Swash|Bitter|Bree+Serif|Indie+Flower|Lobster|Lobster+Two|Pacifico|Passion+One|Permanent+Marker|Righteous|Roboto+Slab|Shrikhand" rel="stylesheet">
	</head>
	<body>
		<div id="container">
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:black;background-color: #447789;background-color: black;">
  			<a class="navbar-brand" href="index.php">The Binaries</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarText">
    		<ul class="navbar-nav mr-auto">
    		  	<li class=<?php if($active_page=="home"){echo"\"nav-item active\"";}else{echo"\"nav-item\"";} ?> >
    		    	<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    		  	</li>
    		  	<li class=<?php if($active_page=="members"){echo"\"nav-item active\"";}else{echo"\"nav-item\"";} ?>>
    		  	  <a class="nav-link" href="members.php">Members</a>
    		  	</li>
    			<li class=<?php if($active_page=="services"){echo"\"nav-item active\"";}else{echo"\"nav-item\"";} ?>>
        			<a class="nav-link" href="services.php">Services</a>
      			</li>
      			<li class=<?php if($active_page=="about"){echo"\"nav-item active\"";}else{echo"\"nav-item\"";} ?>>
        			<a class="nav-link" href="about.php">About Us</a>
      			</li>
      			<li class=<?php if($active_page=="feedback"){echo"\"nav-item active\"";}else{echo"\"nav-item\"";} ?>>
        			<a class="nav-link" href="feedback.php">Feedback</a>
      			</li>
      			<li class=<?php if($active_page=="request"){echo"\"nav-item active\"";}else{echo"\"nav-item\"";} ?>>
        			<a class="nav-link" href="request.php">Request</a>
      			</li>
    		</ul>
  		</div>
	</nav>
		<div class="container-fluid" id="greeting-bar">
			<center><h1 id="greeting"></h1></center>
		</div>
		<div id="page-content">
			<?php echo"$page_content";?>
		</div>
	<div id="footer" class="container-fluid">
		<center><p id="footer-text">&copy; The Binaries 2017 - All rights reserved. <a href="about.php">About Us</a></p></center>
	</div>
	</div>
	<script type="text/javascript" src="script.js">
	</script>
	</body>
</html>