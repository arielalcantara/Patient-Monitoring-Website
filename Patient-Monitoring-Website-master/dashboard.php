<?php
	require_once 'includes/logincheck.inc.php';
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
    <title>Dashboard | Summit View General Hospital - Patient Monitoring System</title>
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
				<h1>My Dashboard</h1>
			</header>
			<section id="page-content">
				<h2>
					Welcome, 
					<?php
						echo $_SESSION['ufirst'] . ".";
					?>
				</h2>
				<p>
					<?php
						// Check if it is the user's first time logging in
						if ($_SESSION['ulastlogin'] == 'N/A') {
							echo "This is your first time signing in to SVGH Online Health History Report. We aim to be your companion in your journey to holistic fitness and outstanding health. Thank you for your continuous patronage. <b>- SVGH Team</b>";
						} else {
							echo "You were last signed in on " . $_SESSION['ulastlogin'] . ".";
						}
					?>
				</p>
				<h2>My Recent Checkup Session</h2>
				<p>
					<a href="">*insert date*</a>
				</p>
			</section>	
		</section>
	</main>
	<?php
		require 'elements/page-footer.inc.php';
	?>
</body>
<script src="includes/main.js"></script>
</html>
