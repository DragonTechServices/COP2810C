<?php
for($x=0;$x<50;$x++){
	if($x==25){
		break;
	} else {
		echo nl2br("The count is: $x \n");
		}
}
echo "the loop stopped at a count of: $x";
?>