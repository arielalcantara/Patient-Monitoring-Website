<?php
if (isset($_POST['editprofile-submit'])) { 
	require 'dbconnect.inc.php';
	$user = $_GET['user'];
	$client = $_GET['client'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	$bloodGroup = $_POST['blood-group'];
	$mobileNumber = $_POST['mobile-number'];
	$allergies = $_POST['allergies'];
	$contactPerson = $_POST['contact-person'];
	$familyHistory = $_POST['family-history'];
	$medicalHistory = $_POST['medical-history'];
	$currentHealth = $_POST['current-health'];
	// Start Transaction
	$sql = "BEGIN; 
	UPDATE users SET user_first = $fname, user_last = $lname WHERE user_id = $user;
	UPDATE clients SET gender = $gender, age = $age, address = $address, city = $city, country = $country, 
	blood_group = $bloodGroup, mobile_num = $mobileNumber, allergies = $allergies, contact_person = $contactPerson, 
	family_history = $familyHistory, medical_history = $medicalHistory, current_health = $currentHealth WHERE client_id = $client;
	COMMIT;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck > 0) {
		header("Location: ../clientprofile.php?editprofile=success&client=$client&user=$user");
		exit();	
	} else {
		header("Location: ../clientprofile.php?error=sqlerror&client=$client&user=$user");
		exit();
	}
}
/* FOR PREPARED STATEMENT
	$stmt = mysqli_stmt_init($conn);
	// Check if SQL statement runs in the database server
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../clientprofile.php?error=sqlerror&client=$client&user=$user");
		exit();
	} else {
		mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $fname, $lname, $user, $gender, $age, $address, $city, $country, $bloodGroup, $mobileNumber, $allergies, $contactPerson, $familyHistory, $medicalHistory, $currentHealth, $client);
		mysqli_stmt_execute($stmt);
		header("Location: ../clientprofile.php?editprofile=success&client=$client&user=$user");
		exit();	
	}
	mysqli_stmt_close($stmt); // Close the prepared statement
	mysqli_close($conn); // Close database connection
}
*/