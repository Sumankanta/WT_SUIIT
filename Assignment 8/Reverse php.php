<?php  
$num = 654321;  
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem; 
$num = ($num / 10);   
}  
echo "Reverse number of 654321 is: $revnum";  
?>  
