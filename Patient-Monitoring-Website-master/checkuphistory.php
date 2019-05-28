<?php
	require_once 'includes/logincheck.inc.php';
	$requiredUserType = 'user';
	require_once 'includes/usertypecheck.inc.php';
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="styles/resetstyle.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Clients | Summit View General Hospital - Patient Monitoring System</title>
</head>
<body>
	<?php
		require 'elements/page-header.inc.php'; 
		require 'elements/mobile-header.inc.php';
	?>
	<main>
		<?php
			require 'elements/mobile-navigation.inc.php';
		?>
		<section id="section-wrap">
			<header id="heading">
				<h1>Online Health History Report</h1>
			</header>
			<header id="page-title">
				<h1>Checkup Records</h1>
			</header>
			<section id="page-content">
				<input id="search-bar" type="text" placeholder="Search Here..." 
				onkeyup="search()"> 
				<div id="records">
					<ul id="ul">
						<?php
							require 'includes/mycheckuphistory.inc.php';
						?>
					</ul>
				</div>
			</section>	
		</section>
	</main>
	<?php
		require 'elements/page-footer.inc.php';
	?>
</body>
<script src="includes/main.js"></script>
</html>