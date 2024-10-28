<?php 
/*2. Write PHP code to display your Roll Number, Course Name and Technology Name on the 
browser. */
function printInfo($rollNumber, $courseName, $technologyName){
	$information = "My Roll Number is: ".$rollNumber."\n".
					"My Course Name is: ".$courseName."\n".
					"The Technology Name is: ".$technologyName;
	echo $information;
	
}
printInfo("CIT-227-019/2022", "Software Engineering", "Web Programming");
?>

