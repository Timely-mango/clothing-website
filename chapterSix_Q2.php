<?php 
/*
2. Write a simple program to check an alphabet entered by user is a Vowel or not using if 
statement, if else if else statement and switch case statements.*/
function checkAlphabet($letter){
	switch ($letter) {
	case "a":
	case "e":
	case "i":
	case "o":
	case "u":
		print $letter." is an alphabe \nt";
		break;
	default:
		print $letter." is NOT an alphabet \n";
	}
}

echo checkAlphabet("p");

 
?>

