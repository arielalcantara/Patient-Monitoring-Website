<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard | Summit View General Hospital - Patient Monitoring System</title>
</head>
<body>
	<header id="page-header">
		<div id="logo">
			<img src="images/logo.png" alt="Summit View General Hospital Logo">
		</div>
		<div id="main-header">
			<h1><b>SUMMIT VIEW GENERAL HOSPITAL</b></h1>
			<h2><i>Providing world-class healthcare services since 1984.</i></h2>
		</div>
	</header>
	<div id="#">
		<nav>
			<ul>
				<li><a href="dashboard.html"><i class="fas fa-home"></i> My Dashboard</a></li>
				<li><a href="#"><i class="fas fa-file-medical"></i> My Checkup History</a></li>
				<li><a href="#"><i class="fas fa-user"></i> My Account</a></li>
				<li><form action="includes/logout.inc.php" method="post"><button type="submit" name="logou-submit"><a><i class="fas fa-sign-out-alt"></i> Log Out</a></button></form></li>
			</ul>
		</nav>
		<div id="column-wrap">
			<header id="heading">
				<h1>Online Health History Report</h1>
			</header>
			<header id="page-title">
				<h1>My Dashboard</h1>
			</header>
			<section id="dashboard-message">
				<h2>Welcome *insert name*</h2>
				<p>
					You last signed in on *insert previous login date*.
				</p>
				<h2>My Recent Checkup Session</h2>
				<p>
					<a href="">*insert date*</a>
				</p>
			</section>
		</div>
	</div>
	<footer id="footer">
		&copy; This website is developed by Ariel Alcantara
	</footer>
</body>
</html>
