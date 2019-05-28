<?php
include 'dbconnect.inc.php';
// Update last logged in date/time in database 
date_default_timezone_set("Asia/Taipei"); // Change timezone used 
$date = date("M d, Y");
$time = date("h:i A");
$sql = "UPDATE users SET user_lastlogin = '" . $date . " at " . $time . 
"' WHERE user_id = " . $_SESSION['uid'] . ";";
mysqli_query($conn, $sql);