<?php
	if (isset($_GET["error"])) {
		if ($_GET["error"] == "emptyfields") {
			echo '<p class="loginerror">* Please fill in all fields.';
		}
		elseif ($_GET["error"] == "wrongpwd") {
			echo '<p class="loginerror">* Incorrect password.';
		}
		elseif ($_GET["error"] == "nouser") {
			echo '<p class="loginerror">* The user does not exist.';
		}
	}