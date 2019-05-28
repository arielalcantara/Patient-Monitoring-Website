<?php
// Output list of clients
require_once 'dbconnect.inc.php';
$sql = "SELECT * FROM users AS u 
INNER JOIN clients AS c ON u.user_id = c.user_id 
WHERE user_type = 'user'
ORDER BY client_id DESC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<li><a href=\"clientprofile.php?client=" 
		. $row['client_id'] . "&user=" . $row['user_id'] . "\" target=\"_blank\">" 
		. $row['user_first'] . " " . $row['user_last'] . "</a></li>";
	}
} 