<?php
// Echo error messages for add account form
if (isset($_GET["error"])) {
	if ($_GET["error"] == "emptyfields") {
		echo '<p id="addaccounterror">* CREATE ACCOUNT FAILED: Please fill in all fields</p>';
	} elseif ($_GET["error"] == "invalidemailuid") {
		echo '<p id="addaccounterror">* CREATE ACCOUNT FAILED: Invalid Username and E-mail Address</p>';
	} elseif ($_GET["error"] == "invalidemail") {
		echo '<p id="addaccounterror">* CREATE ACCOUNT FAILED: Invalid E-mail Address</p>';
	} elseif ($_GET["error"] == "invaliduid") {
		echo '<p id="addaccounterror">* CREATE ACCOUNT FAILED: Invalid Username</p>';
	} elseif ($_GET["error"] == "passwordcheck") {
		echo '<p id="addaccounterror">* CREATE ACCOUNT FAILED: Passwords entered are unidentical</p>';
	} elseif ($_GET["error"] == "sqlerror") {
		echo '<p id="addaccounterror">* CREATE ACCOUNT FAILED: Database Error</p>';
	} elseif ($_GET["error"] == "usertaken") {
		echo '<p id="addaccounterror">* CREATE ACCOUNT FAILED: Username already taken</p>';
	} elseif ($_GET["error"] == "emailtaken") {
		echo '<p id="addaccounterror">* CREATE ACCOUNT FAILED: E-mail Address already taken</p>';
	} 
} 
// Echo when add account is successful
elseif (isset($_GET["addaccount"]) == "success") { 
	echo '<p id="addaccounterror"><span>Account Sucessfully Added.</span></p>'; 
}