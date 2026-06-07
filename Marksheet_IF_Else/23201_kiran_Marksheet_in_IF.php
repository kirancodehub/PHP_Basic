<?php

echo "<html>";

echo "<head>";

echo "<title>Marksheet using if</title>";

echo "</head>";

echo "<body>";

echo "<h1>Marksheet using if</h1>";

$english = 90;
$maths = 60;
$computer = 92;
$science = 70;
$urdu = 60;

$obt = $english + $maths + $computer +$science + $urdu ;
$percentage = $obt / 500 * 100 ;

echo "<br/>";
echo "<div>";
echo "<br/>";
echo "STUDENT NAME : Aviyaan";
echo "<br/>";
echo "STUDENT Roll no : 12345";
echo "<br/>";
echo "<br/>";
echo "SNO SUBJECT TOTAL OBTAINED MARKS";
echo "<br/>";

echo "01_____English________100______$english";
echo "<br/>";
echo "02_____Maths__________100______$maths";
echo "<br/>";
echo "03_____Computer_______100______$computer";
echo "<br/>";
echo "04_____Science________100______$science";
echo "<br/>";
echo "05_____Urdu___________100______$urdu";
echo "<br/>";
echo "<br/>";
echo "_______________________500______$obt";
echo "<br/>";
echo "_____________________Total______Obtainde";
echo "<br/>";

if($english AND $maths AND $computer AND $science AND $urdu > 40){
$result = "PASS";
echo "Percentage = ".$percentage;
echo "<br/>";
echo "Result = " . $result;
echo "<br/>";
if($obt >=300 AND $obt<=500){
		
		echo "Grade = A+";
	}
	elseif($obt >= 250 AND $obt<=300){
		
		echo "Grade = A";
	}
	elseif($obt >=200 AND $obt<=250){
		
		echo "Grade = B";
	}elseif($obt >=150 AND $obt<=200){
		
		echo "Grade = C";
	}elseif($obt >=100 AND $obt<=150){
		
		echo "Grade = D";
	}


}
else{
echo "Percentage = ".$percentage;
echo "<br/>";
echo "Result = FAIL";
echo "<br/>";
}



echo "</div>";
echo "</body>";
echo "</html>";
?>