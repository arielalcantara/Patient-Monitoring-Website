<?php
	require_once 'includes/dbconnect.inc.php';
	session_start();
	// Update last logged in time if a user is still logged in 
	if (isset($_SESSION['uname'])) {
		require_once 'includes/datetime.inc.php';
	}
	// Clear session array each time this page is accessed
	session_unset(); 
	session_destroy();
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
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="styles/resetstyle.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Summit View General Hospital - Patient Monitoring System</title>
</head>
<body>
	<?php
		require 'elements/page-header.inc.php';
	?>
	<header id="sub-header">
		<h1>SVGH Patient Monitoring System:</h1>
		<h2>Patient's Health History Report</h2>
	</header>
	<div id="content-wrap">	
		<section id="description">
			<p>
				The <strong style="color: #112D4E">Patient Monitoring System (PMS)</strong> is a system developed to computerize patient information which are made available to all clients and SVGH healthcare personnel.  
			</p>
			<section id="terms-and-conditions">
				<h3>Terms and Conditions</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sem felis, semper a lectus ac, tincidunt hendrerit leo. Nunc turpis urna, sagittis at eros id, vestibulum sagittis mi. Donec tempor turpis id elementum imperdiet. Integer tellus mi, varius eu lacinia vitae, auctor sit amet ipsum. Donec suscipit mattis ultricies. Curabitur.
				</p>
			</section>
		</section>
		<section id="login-section">
			<div id="login-instructions">
				<div id="icon-container">
					<div id="login-icon">
						<i class="fas fa-info"></i>
					</div>
				</div>
				<div id="login-text">
					Please enter your correct username and password to continue.
				</div>
			</div>
			<div>
				<form  id="login-form" action="includes/login.inc.php" method="post">
				 	<input class="login-input" type="text" name="uid" placeholder="USERNAME"><br>
				 	<input class="login-input" type="password" name="pwd" placeholder="PASSWORD"><br>
				 	<div>
				 		<button type="submit" name="login-submit">Sign In</button>
				 		<?php 
				 			include "includes/loginerror.inc.php";
				 		?>
				 	</div>	
				</form> 
			</div>
		</section>	
	</div>
	<?php
		require 'elements/page-footer.inc.php';
	?>
</body>
</html>