<html>
<head></head>
<body>
<?php
//declare variables
$var1 = 20;
$var2 = 30;
$var3 = 80;
$var4 = 50;


//and operator
if(($var1 == 20) and ($var2 == 30)){
	echo nl2br("The result is true in the and statement \n");
}

//or operator
if(($var2 < 50) or ($var3<90)){
	echo nl2br("The result is true in the or statement \n");
}

//xor operator

if(($var4 == 50) xor ($var3<10)){
	echo nl2br("the result is only 1 condition is true in the xor statement \n");
}

//&& operator
if(($var4 == 50) && ($var1<30)){
	echo  nl2br("the result is true in the && statement \n");
}

// || operator

if(($var2==30) || ($var3>$var2)){
	echo nl2br("the result is true in the || statement \n");
}

//! operator

if($var1 != 30){
	echo nl2br("the result is true in the ! statement \n");
}

?>

</body>
</html>