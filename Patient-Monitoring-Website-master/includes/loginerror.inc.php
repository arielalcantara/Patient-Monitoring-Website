<?php
if (isset($_GET["error"])) {
	if ($_GET["error"] == "emptyfields") {
		echo '<p id="loginerror">* Please fill in all fields.</p>';
	} elseif ($_GET["error"] == "wrongpwd") {
		echo '<p id="loginerror">* Incorrect password.</p>';
	} elseif ($_GET["error"] == "nouser") {
		echo '<p id="loginerror">* The user does not exist.</p>';
	}
}