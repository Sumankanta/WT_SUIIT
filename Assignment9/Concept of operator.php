<?php
$num1=20;
$num2=10;
echo "Arithmetic Operator <br>";
echo "----------------------</br>";
echo $num1+$num2."<br>";
echo $num1-$num2."<br>";
echo "Multiplication = ".$num1*$num2."<br>";
echo "Division = ".$num1/$num2."<br>";
echo "Modulus = ".$num1%$num2."<br>";
echo "Exponential = ".$num1**$num2."<br>";

echo "Assignment Operator <br>";
echo "----------------------<br>";
echo $num1+=$num2;
echo $num1-=$num2;
echo $num1*=$num2;
echo $num1/=$num2;
echo $num1%=$num2;

echo "<br>Comparision Operator <br>";
echo "----------------------<br>";
echo $num1<$num2;
echo $num1>$num2;
echo $num1<=$num2;
echo $num1>=$num2;
echo $num1==$num2;

echo "<br> increment & decrement Operator <br>";
echo "----------------------<br>";
$num=10;
echo "Incrememt Operator".++$num."<br>";
echo "Decrement Operatop".--$num;
?>