<nav>
	<ul>
		<li><a href="dashboard.php"><i class="fas fa-home"></i><span> My Dashboard</span></a></li>
		<?php
			// Show only if user type = user
			if ($_SESSION['utype'] == "user") {
				echo '<li><a href="checkuphistory.php"><i class="fas fa-file-medical"></i>
				<span> My Checkup History</span></a></li>';
			}
			// Show only if user type = admin
			if ($_SESSION['utype'] == "admin") {
				echo '<li><a href="clients.php"><i class="fas fa-users"></i>
				<span> My Clients</span></a></li>';
				echo '<li><a href="checkups.php"><i class="fas fa-file-medical"></i>
				<span> Checkup Records</span></a></li>';
			}
		?>
		<li><a href="account.php"><i class="fas fa-user"></i><span> My Account</span></a></li>
		<li><form id="main-logout" action="includes/logout.inc.php" method="post"><input type="submit" name="logout-submit"><i class="fas fa-sign-out-alt"></i><span> Log Out</span></form></li>
	</ul>
</nav>