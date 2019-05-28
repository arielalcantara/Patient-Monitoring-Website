<?php
// Prevent access to pages that require a different user type
if ($_SESSION['utype'] != $requiredUserType) {
	echo '<script>
		function wrongUserType() {
		alert("ACCESS DENIED: You are not permitted to access this content.");
		}
		wrongUserType();
		window.location.replace("dashboard.php");
	</script>';
	exit();
} 
