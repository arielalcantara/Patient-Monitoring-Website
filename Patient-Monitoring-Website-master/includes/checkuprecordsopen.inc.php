<?php
// Generate particular session details using Session ID
require_once 'dbconnect.inc.php';
$session = $_GET['session'];
$sql = "SELECT session_date, user_first, user_last, gender, age, height, weight, temp, heart_rate, bp, diagnosis, medications, services_due
FROM users AS u 
INNER JOIN checkup_sessions AS cs ON cs.user_id = u.user_id
INNER JOIN clients AS c ON c.user_id = u.user_id
WHERE session_id = " .  $session . ";";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>
				<td><b>Session Date:</b></td> 
				<td>" . $row['session_date'] . "</td>
			</tr>
			<tr>
				<td><b>First Name:</b></td> 
				<td>" . $row['user_first'] . "</td>
			</tr>
			<tr>
				<td><b>Last Name:</b></td>
				<td>" . $row['user_last'] . "</td>
			</tr>
			<tr>
				<td><b>Gender:</b></td>
				<td>" . $row['gender'] . "</td>
			</tr>
			<tr>
				<td><b>Age:</b></td>
				<td>" . $row['age'] . "</td>
			</tr>
			<tr>
				<td><b>Height (cm):</b></td>
				<td>" . $row['height'] . "</td>
			</tr>
			<tr>
				<td><b>Weight (lbs):</b></td>
				<td>" . $row['weight'] . "</td>
			</tr>
			<tr>
				<td><b>Body Temp. (&deg;C):</b></td>
				<td>" . $row['temp'] . "</td>
			</tr>
			<tr>
				<td><b>Heart Rate (BPM):</b></td>
				<td>" . $row['heart_rate'] . "</td>
			</tr>
			<tr>
				<td><b>Blood Pressure:</b></td>
				<td>" . $row['bp'] . "</td>
			</tr>
			<tr>
				<td><b>Diagnosis:</b></td>
				<td>" . $row['diagnosis'] . "</td>
			</tr>
			<tr>
				<td><b>Medications:</b></td>
				<td>" . $row['medications'] . "</td>
			</tr>
			<tr>
				<td><b>Services Due:</b></td>
				<td>" . $row['services_due'] . "</td>
			</tr>";
	}
} 

