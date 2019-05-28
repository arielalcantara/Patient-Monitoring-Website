<?php
	require_once 'includes/logincheck.inc.php';
	$requiredUserType = 'admin';
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
    <link rel="icon" href="images/icon.png"	>
    <link rel="stylesheet" href="styles/resetstyle.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Client Profile | Summit View General Hospital - Patient Monitoring System</title>
</head>
<body>
	<?php
		require 'elements/page-header.inc.php'; 
		require 'elements/mobile-header.inc.php';
	?>
	<main>
		<section id="section-wrap">
			<header id="heading">
				<h1>Online Health History Report</h1>
			</header>
			<header id="page-title">
				<h1>Checkup Records</h1>
			</header>
			<section id="page-content">
				<div id = "btn-container">
					<button id="add-btn">Edit Record</button>
				</div>
				<div id="modal">
					<section id="add-record">
						<header>
							<div id="close-btn">
								&times;
							</div>
							<h1>Edit Checkup Record</h1>
						</header>
						<form action="includes/clientprofileedit.inc.php" method="post">
							First Name: <input type="text" name="fname">
							Last Name: <input type="text" name="lname">
							Gender: <select name="gender">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							</select>
							Age: <input type="text" name="age">
							Address: <input type="text" name="address">
							City/State: <input type="text" name="city">
							Country: <input type="text" name="country">
							Mobile Number: <input type="text" name="mobile-number">
							Blood Group: <input type="text" name="blood group">
							Allergies: <input type="text" name="allergies">
							Contact Person: <input type="text" name="contact-person">
							Family History: <input type="text" name="family-history">
							Medical History: <input type="text" name="medical-history">
							Current Health: <input type="text" name="current-health">
							<button type="submit" name="addaccount-submit">Create Account</button>
						</form>
					</section>
				</div>
				<div id="checkup-record">
					<table>
						<?php
							require_once 'includes/checkuprecordsopen.inc.php';
						?>
					</table>
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