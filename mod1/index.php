<?php
include 'config.php';
include 'openDB.php';

$sql = "SELECT firstName, lastName, officePhone FROM employees";
$result = mysqli_query($conn, $sql);
?>
<html>
	<head>
	
	</head>
	<body>
	
	<?php

if (mysqli_num_rows($result) > 0) {

echo "<table border = 2> <tr><td>First Name:</td><td>Last Name:</td><td>Office Phone:</td><tr>";
	while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
		echo "<td>" . $row["firstName"]."</td>";
		echo "<td>" . $row["lastName"]."</td>";
		echo "<td>" . $row["officePhone"]."</td>";
		echo "</tr>";
	}
echo "</table>";	
} else {
	echo "0 results";
}

mysqli_close($conn);
?>
	</body>
</html>

