<?php
$str1 = "racecar";
$str2 = "1991";
$str3 = "racetruck";

function palindromeCheck($pass1){
	if($pass1 == strrev($pass1)){
		return "The string is a palindrome!\n";
	} else {
		return "The string is not a palindrome!\n";
		}
}

echo nl2br(palindromeCheck($str1));
echo nl2br(palindromeCheck($str2));
echo nl2br(palindromeCheck($str3));

?>