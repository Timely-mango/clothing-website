<?php 
/*
3. Write a code to input Temperature in Centigrade and convert to Fahrenheit.*/
function convertToFahrenheit($centigrade){
	$fahrenheit = (1.8 * $centigrade) + 32;
	return $fahrenheit;
}
printf(convertToFahrenheit(30)." degrees Fahrenheit. \n");
 
?>

