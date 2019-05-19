<?php
if (isset($_POST['adduser-submit'])) { //adduser-submit (tentative)
	require 'dbconnect.inc.php';
	$uid = $_POST['uid'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	//Check if all input fields are filled up
	if (empty($uid) || empty($fname) || empty($lname) || empty($email) || empty($pwd)) {
		header("Location: ../index.php?error=emptyfields&uid=".$uid."&fname=".$fname."&lname=".$lname. 
		"&email=".$email); //Retain filled input fields
		exit();
	}
	//Check if both e-mail address and username provided are invalid
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $uid)) { 
		header("Location: ../index.php?error=invalidemailuid");
		exit();
	//Check if email provided is valid
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
		header("Location: ../index.php?error=invalidemail&uid=".$uid);
		exit();
	}
	//Check if username entered contains invalid characters
	elseif (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
		header("Location: ../index.php?error=invaliduid&email=".$email);
		exit();
	}
	//Check if 2 passwords entered do not match each other *NOT NEEDED*
	elseif ($pwd !== $passwordRepeat) { 
		header("Location: ../index.php?error=passwordcheck&uid=".$uid."&email=".$email);
		exit();
	}
	//Check if user being registered already exists in the database
	else {
		$sql = "SELECT user_id FROM users WHERE user_id=?;";
		$stmt = mysqli_stmt_init($conn);
		//Check if SQL statement runs in the database server
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../index.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_bind_param($stmt, "s", $uid);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt); 
			$resultCheck = mysqli_stmt_num_rows($stmt);
			//Check if username already exists in the database
			if ($resultCheck > 0) {
				header("Location: ../index.php?error=usertaken&email=".$email);
				exit();
			}
			else {
				$sql = "INSERT INTO users (user_first, user_last, user_email, user_uname, user_pwd) 
				VALUES (?, ?, ?, ?, ?);"; 
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../index.php?error=sqlerror");
					exit();
				}
				else {
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT)
					mysqli_bind_param($stmt, "sssss", $uid, $fname, $lname, $email, $hashedPwd);
					mysqli_stmt_execute($stmt);
					header("Location: ../index.php?adduser=success");
					exit;
					}
			}
		}
	}
	mysqli_stmt_close($stmt); //Close the prepared statement
	mysqli_close($conn); //Close database connection
}
//Prevent accessing the page via URL
else {
	header("Location: ../index.php");
	exit();
}