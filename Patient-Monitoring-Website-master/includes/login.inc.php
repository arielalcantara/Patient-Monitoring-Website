<?php
if (isset($_POST['login-submit'])) {
	require 'dbconnect.inc.php';
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php?error=emptyfields");
		exit;
	}
	else {
		$sql = "SELECT * FROM users WHERE user_uname=?";
		$stmt = mysqli_stmt_init($conn);
		//Check if SQL statement ran in the database server
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../index.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $uid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			//Check if the statement yielded a result from the database
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($pwdCheck == FALSE) {
					header("Location: ../index.php?error=wrongpwd");
					exit();
				}
				elseif ($pwdCheck == TRUE) {
					session_start();
					$_SESSION['uid'] = $row['user_id'];
					$_SESSION['uname'] = $row['user_uname'];
					header("Location: ../dashboard.php");
					exit();
				}
				else {
					header("Location: ../index.php?error=wrongpwd");
					exit();
				}
			}
			else {
				header("Location: ../index.php?error=nouser");
			}
			exit();
		}
	}
}
else {
	header("Location: ../index.php");
	exit();
}