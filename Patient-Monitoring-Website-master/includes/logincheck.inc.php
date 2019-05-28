<?php
require_once 'includes/dbconnect.inc.php';
session_start();
// Confirm that user is logged in before loading the page
if (!isset($_SESSION['uname'])) {
	echo '<script>
		function noLogin() {
		alert("ACCESS DENIED: You are not logged in.");
		}
		noLogin();
		window.location.replace("index.php");
	</script>';
	exit();
} 