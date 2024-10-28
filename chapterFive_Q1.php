<?php 
/*
1. Write a simple program to calculate total numbers of days you lived up to until now
 Hint: Input your age (in years) and then calculate number of days 
 number _of _days= age(in years) * 365 */
 function totalDaysLived($age){
 	$number_of_days = $age * 365;
 	echo"You have lived ".$number_of_days." days so far."."\n";
 }
 totalDaysLived(20);
 
?>

