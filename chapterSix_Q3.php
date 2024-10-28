<?php 
/*
3. Write a code to check an integer number entered by user is Even or Odd using Conditional 
operator statement. */
function isEvenOrOdd($number){
	$number % 2 == 0 ? printf($number. " is Even.\n"): printf($number." is Odd\n");
}
isEvenOrOdd(12);

?>

