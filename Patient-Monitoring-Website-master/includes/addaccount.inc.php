<?php
if (isset($_POST['addaccount-submit'])) { 
	require 'dbconnect.inc.php';
	$uid = $_POST['uid'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$passwordRepeat = $_POST['pwdRepeat'];
	// Check if all input fields are filled up
	if (empty($uid) || empty($fname) || empty($lname) || empty($email) || empty($pwd)) {
		header("Location: ../clients.php?error=emptyfields&uid=" . $uid . "&fname=" . $fname . "&lname=" . $lname . "&email=" . $email); 
		exit();
	}
	// Check if both e-mail address and username provided are invalid
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $uid)) { 
		header("Location: ../clients.php?error=invalidemailuid&fname=" . $fname . "&lname=" . $lname);
		exit();
	}
	// Check if email provided is valid
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
		header("Location: ../clients.php?error=invalidemail&uid=" . $uid . "&fname=" . $fname . "&lname=" . $lname);
		exit();
	}
	// Check if username entered contains invalid characters
	elseif (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
		header("Location: ../clients.php?error=invaliduid&email=" . $email . "&fname=" . $fname . "&lname=" . $lname);
		exit();
	}
	// Check if 2 passwords entered do not match each other 
	elseif ($pwd !== $passwordRepeat) { 
		header("Location: ../clients.php?error=passwordcheck&uid=" . $uid . "&email=" . $email . "&fname=" . $fname . "&lname=" . $lname);
		exit();
	}
	// Check if user being registered already exists in the database
	else {
		$sql = "SELECT user_uname FROM users WHERE user_uname = ?;";
		$stmt = mysqli_stmt_init($conn);
		// Check if SQL statement runs in the database server
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../clients.php?error=sqlerror&uid=" . $uid . "&fname=" . $fname . "&lname=" . $lname . "&email=" . $email);
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "s", $uid);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt); 
			$resultCheck = mysqli_stmt_num_rows($stmt);
			// Check if username already exists in the database
			if ($resultCheck > 0) {
				header("Location: ../clients.php?error=usertaken&email=" . $email . "&fname=" . $fname . "&lname=" . $lname);
				exit();
			} else {
				// Repeat above procedure to check if e-mail address already exists in the database
				$sql = "SELECT user_email FROM users WHERE user_email = ?;";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../clients.php?error=sqlerror&uid=" . $uid . "&fname=" . $fname . "&lname=" . $lname . "&email=" . $email);
					exit();
				} else {
					mysqli_stmt_bind_param($stmt, "s", $email);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_store_result($stmt); 
					$resultCheck = mysqli_stmt_num_rows($stmt);
					if ($resultCheck > 0) {
						header("Location: ../clients.php?error=emailtaken&uid=" . $uid . "&fname=" . $fname . "&lname=" . $lname);
						exit();
					} else {
						$sql = "INSERT INTO users (user_first, user_last, user_email, user_uname, user_pwd) 
						VALUES (?, ?, ?, ?, ?);"; 
						$stmt = mysqli_stmt_init($conn);
						if (!mysqli_stmt_prepare($stmt, $sql)) {
							header("Location: ../clients.php?error=sqlerror&uid=" . $uid . "&fname=" . $fname . "&lname=" . $lname . "&email=" . $email);
							exit();
						} else {
							$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
							mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $uid, $hashedPwd);
							mysqli_stmt_execute($stmt);
							$sql = "SELECT user_id FROM users WHERE user_uname = '" . $uid . "';";
							$result = mysqli_query($conn, $sql);
							$resultCheck = mysqli_num_rows($result);
							if ($resultCheck > 0) {
								$row = mysqli_fetch_assoc($result);
								$sql = "INSERT INTO clients (user_id) VALUES ('" . $row['user_id'] . "');";
								mysqli_query($conn, $sql);
								header("Location: ../clients.php?addaccount=success");
								exit();
							}	
						}
					}	 
				}
			}
		}
	}
	mysqli_stmt_close($stmt); // Close the prepared statement
	mysqli_close($conn); // Close database connection
}