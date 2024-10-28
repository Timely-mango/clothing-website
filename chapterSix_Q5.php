<?php 
/*
5. Write a program that input a number, then report whether the number is in the range from 
1 to 100. Otherwise the number above to 100.
*/
function checkNumberRange($number){
	if($number > 100){echo "The number is above 100";}
	else if($number >= 1){echo "The number is in the range from 1 to 100";}
	else {echo "The number is below 1";}
}
checkNumberRange(101);

?>

