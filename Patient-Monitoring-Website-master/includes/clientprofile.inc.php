<?php
// Generate particular client profile using Client ID
require_once 'dbconnect.inc.php';
$client = $_GET["client"];
$user = $_GET["user"];
$sql = "SELECT user_first, user_last, gender, age, address, city, country, mobile_num, blood_group, allergies, contact_person, family_history, medical_history, current_health 
FROM users AS u 
INNER JOIN clients AS c ON c.user_id = u.user_id
WHERE client_id = $client;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>
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
				<td><b>Address:</b></td>
				<td>" . $row['address'] . "</td>
			</tr>
			<tr>
				<td><b>City/State:</b></td>
				<td>" . $row['city'] . "</td>
			</tr>
			<tr>
				<td><b>Country:</b></td>
				<td>" . $row['country'] . "</td>
			</tr>
			<tr>
				<td><b>Mobile No.:</b></td>
				<td>" . "0" . $row['mobile_num'] . "</td>
			</tr>
			<tr>
				<td><b>Contact Person:</b></td>
				<td>" . $row['contact_person'] . "</td>
			</tr>
			<tr>
				<td><b>Blood Type:</b></td>
				<td>" . $row['blood_group'] . "</td>
			</tr>
			<tr>
				<td><b>Allergies:</b></td>
				<td>" . $row['allergies'] . "</td>
			</tr>
			<tr>
				<td><b>Family History:</b></td>
				<td>" . $row['family_history'] . "</td>
			</tr>
			<tr>
				<td><b>Current Health:</b></td>
				<td>" . $row['current_health'] . "</td>
			</tr>";
	}
}