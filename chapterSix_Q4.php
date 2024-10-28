<?php 
/*
4. Write a program to input subject marks Math, English and Physics then to prepare marks 
sheet of a student that will show the Obtain marks, percentage and grade.*/
function printReport($math, $english, $physics){
	printf("......You have obtained the following marks......\n");
	printf("Math: ".$math." ".getGrade($math)."\n"."English: ".$english." ".getGrade($english)."\n"."Physics: ".$physics." ".getGrade($physics)."\n");
}
function getGrade($marks){
	if($marks >= 70){return "A";}
	else if($marks >= 60){return "B";}
	else if($marks >= 50){return "C";}
	else if($marks >= 40){return "D";}
	else{return "E";}
}
printReport(89, 70, 66);

?>

