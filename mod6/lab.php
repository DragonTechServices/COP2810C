<?php
function revStr($passStr){
	return strrev($passStr);
}
$startStr = "hello world";
$endStr = revStr($startStr);
echo nl2br("The starting string is: $startStr \n");
echo nl2br("The reversed string is: $endStr \n");
?>