<?php

require_once "formvalidator.php";
$show_form = true;

$values = $_POST['inpValues'];

if(isset($_POST['Submit']))
{
	$validator = new FormValidator();
	
	if($validator->ValidateForm())
	{
		echo "<h2>Validation Success</h2>";
		echo "<ul>";
		for($x = 0; $x < count($values); $x++)
		{
			echo "<li>$values[$x]</li>";
		}
		echo "</ul>";
		sort($values);
				echo "<ul>";
		for($x = 0; $x < count($values); $x++)
		{
			echo "<li>$values[$x]</li>";
		}
		echo "</ul>";

		
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
				<label>Enter First string:</label>
				<input name="inpValues[]" type="text" size="25"></br>
				
				<label>Enter Second string:</label>
				<input name="inpValues[]" type="text" size="25"></br>
				
				<label>Enter Third string:</label>
				<input name="inpValues[]" type="text" size="25"></br>
				<input name="Submit" type="submit" value="Submit">
				
				
			</form>
<?php
}
?>
		</body>
</html>