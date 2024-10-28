<?php 
/*
1. Write a simple program of the following output using Constants.
 Employee code is 001
 Employee Name is ABC
 Employee Salary is 25000
 Working Hours are 7.5 */
 define("Employee_Code", "001", true);
 define("Employee_Name", "ABC");
 define("Employee_Salary", 25000);
 define("Working_Hours", 7.5);
 function printInfo(){
	printf("Employee code is ".Employee_Code."\n");
	printf("Employee Name is ".Employee_Name."\n");
	printf("Employee Salary is ".Employee_Salary."\n");
	printf("Working Hours are ".Working_Hours."\n");
 }
 printInfo();
 
 
?>

