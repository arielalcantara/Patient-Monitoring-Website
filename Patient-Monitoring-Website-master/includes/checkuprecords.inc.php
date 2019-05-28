<?php
// Output list of clients
require_once 'dbconnect.inc.php';
$sql = "SELECT session_id, session_date, user_first, user_last FROM users AS u 
INNER JOIN checkup_sessions AS cs ON u.user_id = cs.user_id 
WHERE user_type = 'user'
ORDER BY session_id DESC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<li><a href=\"checkuprecords.php?session=" 
		. $row['session_id'] . "\" target=\"_blank\">" 
		. $row['session_date'] . " | " . $row['user_first'] . " " 
		. $row['user_last'] . " " . "</a></li>";
	}
} 