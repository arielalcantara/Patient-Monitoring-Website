<header id="mobile-header">
	<h1 id="smallscreen-title"><i class="fas fa-notes-medical"></i> SVGH</h1>
	<h1 id="bigscreen-title"><i class="fas fa-notes-medical"></i> Patient Monitoring System</h1>
	<nav>
		<ul>
			<li><a href="dashboard.php">My Dashboard</a></li>
			<?php
				// Show only if user type = user
				if ($_SESSION['utype'] == "user") {
					echo '<li><a href="checkuphistory.php">My Checkup History</a></li>';
				}
				// Show only if user type = admin
				if ($_SESSION['utype'] == "admin") {
					echo '<li><a href="clients.php">My Clients</a></li>';
					echo '<li><a href="checkups.php">Checkup Records</a></li>';
				}
			?>
			<li><a href="account.php">My Account</a></li>
			<li id="mobile-logout"><form action="includes/logout.inc.php" method="post"><input type="submit" name="logout-submit"></form>Log Out</li>
		</ul>
	</nav>
	<div id="menu-toggle" onclick="toggleMenu()">
		<i class="fas fa-bars"></i>
	</div>
</header>