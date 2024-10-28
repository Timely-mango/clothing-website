<?php 
/*
2. Write a code to calculate and print percentage of a student where,
 Total_Marks=400, Obtained_Marks=Sum of obtained marks of all 4 subjects
 Percentage= (Obtained_Marks*100)/Total_Marks.
 (Hint: input marks of four subjects out of 100). */
 function printPercentage($subjectOne, $subjectTwo, $subjectThree, $subjectFour){
 	$total_Marks = 400;
 	$obtained_Marks = $subjectOne + $subjectTwo + $subjectThree + $subjectFour;
 	$percentage = ($obtained_Marks * 100) / $total_Marks;
 	echo "Your percentage is: ".$percentage."\n";
 }
 printPercentage(88, 79, 80, 94);

 
?>

