<?php
include "getRecords.php";
require_once "formvalidator.php";

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
$show_form=true;
if(isset($_POST['Submit']))
{
	$validator = new FormValidator();
	$validator->addValidation("fName","req","Please fill in a first name");
	$validator->addValidation("lName","req","Please fill in a last name");
	$validator->addValidation("address","req","Please enter an address");
	$validator->addValidation("city","req","Please enter a city");
	$validator->addValidation("state","req","Please enter a state");
	$validator->addValidation("zipCode","req","Please enter a zip code");
	$validator->addValidation("zipCode","num","Zip code must be numeric");
	$validator->addValidation("zipCode","maxlen=5","Zip code must be 5 digits");
	$validator->addValidation("zipCode","minlen=5","Zip code must be 5 digits");
	$validator->addValidation("DoB","req","Enter a date of birth");
	$validator->addValidation("DoH","req","Enter a hire date");
	$validator->addValidation("salary","req","Enter a salary");
	$validator->addvalidation("phone","req","Enter a phone number");
	
	if($validator->ValidateForm())
	{
		echo "<h2>Validation Success</h2>";
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

		$show_form=false;
	}
	else
	{
		echo "<b>Validation Errors:</b>";
		$error_hash = $validator->getErrors();
		foreach($error_hash as $inpname => $inp_err)
		{
			echo "<p>$inpname : $inp_err</p>\n";
		}
	}
	
}
?>
<html>
	<head>
	
	</head>
		<body>
<?php

if(true==$show_form)
{
?>
			<form action="" method="post" name="getRecords" id="getRecords">
				<label>Enter First Name:</label>
				<input name="fName" type="text" size="25"></br>
				
				
				<label>Enter Last Name:</label>
				<input name="lName" type="text" size="25"></br>
				
				
				<label>Enter Address:</label>
				<input name="address" type="text" size="25"></br>
				
				
				<label>Enter City:</label>
				<input name="city" type="text" size="25"></br>
				
				
				<label>Enter State:</label>
				<input name="state" type="text" size="25"></br>
				
				
				<label>Enter Zipcode:</label>
				<input name="zipCode" type="text" size="25"></br>
				
				
				<label>Enter Date of Birth:</label>
				<input name="DoB" type="text" size="25"></br>
				
				
				<label>Enter Hire Date:</label>
				<input name="DoH" type="text" size="25"></br>
				
				
				<label>Enter Salary:</label>
				<input name="salary" type="text" size="25"></br>
				
				
				<label>Enter Office Phone:</label>
				<input name="phone" type="text" size="25"></br>
				<input name="Submit" type="submit" value="Submit">
				
				
			</form>
<?php
}
?>
		</body>
</html>