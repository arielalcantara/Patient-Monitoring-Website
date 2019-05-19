<?php
//Retrieve from the session array the logged-in user's details (For checking log-in success) 
require '../includes/dbconnect.inc.php';
session_start();
echo $_SESSION['uid'];
echo "<br>";
echo $_SESSION['uname'];