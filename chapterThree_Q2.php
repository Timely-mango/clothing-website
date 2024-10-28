<?php 
/*
 Employee code is 001
 Employee Name is ABC
 Employee Salary is 25000
 Working Hours are 7.5
2. Repeat the above program using Variables.
 Hint: Save the given data at 4 memory locations respectively and print on the screen. */
 $employee_Code = "001";
 $employee_Name = "ABC";
 $employee_Salary = 25000;
 $working_Hours = 7.5;
 
 function printsInfo($emp_code, $emp_name, $emp_Salary, $work_hours){
	printf("Employee code is ".$emp_code."\n");
	printf("Employee Name is ".$emp_name."\n");
	printf("Employee Salary is ".$emp_Salary."\n");
	printf("Working Hours are ".$work_hours."\n");
 }
 printsInfo($employee_Code, $employee_Name, $employee_Salary, $working_Hours);
 
?>

