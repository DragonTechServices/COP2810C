<?php
	$sampleInteger = 58796;
	$sampleFloat = 4567.23;
	$sampleString = "Hello";
	$sampleArray = array("hello","this","is","a","sample!");
	
	
?>

<html>
<head>

</head>
<body>
	<table border = "1">
		<tr><td>Integer</td><td><?php var_dump($sampleInteger); ?></td></tr>
		<tr><td>Float</td><td><?php var_dump($sampleFloat); ?></td></tr>
		<tr><td>String</td><td><?php var_dump($sampleString); ?></td></tr>
		<tr><td>Array</td><td><?php var_dump($sampleArray); ?></td></tr>
	</table>
</body>
</html>