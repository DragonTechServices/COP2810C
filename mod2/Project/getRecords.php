<?php
include 'config.php';
include 'openDB.php';
$fName = (isset($_POST['fName'])	?$_POST['fName']	:'');
$lName = (isset($_POST['lName'])	?$_POST['lName']	:'');
$address = (isset($_POST['address'])	?$_POST['address']	:'');
$city = (isset($_POST['city'])	?$_POST['city']	:'');
$state = (isset($_POST['state'])	?$_POST['state']	:'');
$zipCode = (isset($_POST['zipCode'])	?$_POST['zipCode']	:'');
$birthDate = (isset($_POST['DoB'])	?$_POST['DoB']	:'');
$hireDate = (isset($_POST['DoH'])	?$_POST['DoH']	:'');
$salary = (isset($_POST['salary'])	?$_POST['salary']	:'');
$phone = (isset($_POST['phone'])	?$_POST['phone']	:'');

?>
<html>
	<head>
	
	</head>
	<body>
	
	<?php
		function validate(){
		if (strlen($fName) < 1){
			return true;
			} else if (strlen($lName) < 1){
			return true;
			} else if (strlen($address) < 1){
			return true;
			} else if (strlen($city) < 1){
			return true;
			} else if (strlen($state) < 1){
			return true;
			} else if (strlen($zipCode) < 1){
			return true;
			} else if (strlen($birthDate) < 1){
			return true;
			} else if (strlen($hireDate) < 1){
			return true;
			} else if (strlen($salary) < 1){
			return true;
			} else if (strlen($phone) < 1){
			return true;
			} else {
			return false;
			}

	
	}
if (validate()){
$sqlInsert = "INSERT INTO `employees`(`firstName`, `lastName`, `Address`, `city`, `state`, `zipCode`, `dateOfBirth`, `hireDate`, `salary`, `officePhone`) VALUES ('$fName','$lName','$address','$city','$state','$zipCode','$birthDate','$hireDate','$salary','$phone')";
$insertResult = mysqli_query($conn, $sqlInsert);
$sqlGet = "SELECT `employeeId`, `firstName`, `lastName`, `Address`, `city`, `state`, `zipCode`, `dateOfBirth`, `hireDate`, `salary`, `officePhone` FROM `employees` WHERE `lastName` = '$lName'";
$getResult = mysqli_query($conn, $sqlGet);

if (mysqli_num_rows($getResult) > 0) {

echo "<table border = 2> <tr><td>First Name:</td><td>Last Name:</td><td>Address:</td><td>City:</td><td>State:</td><td>Zip Code:</td><td>Date of Birth:</td><td>Hire Date:</td><td>Salary:</td><td>Office Phone:</td></tr>";
	while($row = mysqli_fetch_assoc($getResult)) {
	echo "<tr>";
		echo "<td>" . $row["firstName"]."</td>";
		echo "<td>" . $row["lastName"]."</td>";
		echo "<td>" . $row["Address"]."</td>";
		echo "<td>" . $row["city"]."</td>";
		echo "<td>" . $row["state"]."</td>";
		echo "<td>" . $row["zipCode"]."</td>";
		echo "<td>" . $row["dateOfBirth"]."</td>";
		echo "<td>" . $row["hireDate"]."</td>";
		echo "<td>" . $row["salary"]."</td>";
		echo "<td>" . $row["officePhone"]."</td>";
		echo "</tr>";
	}
echo "</table>";	
} else {
	echo "0 results";
}

mysqli_close($conn);
} else {
echo "invalid input!!!";
}
?>
	</body>
</html>

