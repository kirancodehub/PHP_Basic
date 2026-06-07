<?php
	echo "Swapping Two Variables";
	
	$_num1 = 6;
	$_num2 = 8;
	echo "<br/>";
	echo "<br/>";
	echo "Value of num1    = " . "$_num1";
	echo "<br/>";
	echo "<br/>";
	echo "Value of num2    = " . "$_num2";
	echo "<br/>";
	echo "<br/>";
	echo "After Swapping values";

	$_num1 = $_num1 + $_num2;

	$_num2 = $_num1 - $_num2;
	echo "<br/>";
	echo "<br/>";
	echo "Value of num2    = " . "$_num2";
	echo "<br/>";

	$_num1 = $_num1 - $_num2;
	echo "<br/>";
	echo "<br/>";
	echo "Value of num1    = " . "$_num1";

	


	

?>