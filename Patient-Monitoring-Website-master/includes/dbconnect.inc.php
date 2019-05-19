<?php

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "patient_monitoring";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

//Check for server connection
if (!$conn) {
	die("CONNECTION FAILED: ".mysqli_connect_error());
}