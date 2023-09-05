<?php
$a=12;
$b=20;

//Arithmatic Operator
$c=$a+$b;
Echo ‘Addition =  $c  <br/>’);
$c=$a+$b;
Echo ‘Subtraction= $c  <br/>’);
$c=$a+$b;
Echo ‘Multiplication= $c  <br/>’);
$c=$a+$b;
Echo ‘Division=  $c  <br/>’);
$c=$a+$b;
Echo ‘Modulus= $c  <br/> ’);

//Conditional Operator
  $result = ($a > $b ) ? $a :$b;  
         echo "TEST1 : Value of result is $result<br/>";
                  $result = ($a < $b ) ? $a :$b;
         echo "TEST2 : Value of result is $result<br/>";

//Comparsion Operator
if( $a == $b ) {
            echo "TEST1 : a is equal to b<br/>";
         }else {
            echo "TEST1 : a is not equal to b<br/>";
         }

         if( $a > $b ) {
            echo "TEST2 : a is greater than  b<br/>";
         }else {
            echo "TEST2 : a is not greater than b<br/>";
         }

         if( $a < $b ) {
            echo "TEST3 : a is less than  b<br/>";
         }else {
            echo "TEST3 : a is not less than b<br/>";
         }

         if( $a != $b ) {
            echo "TEST4 : a is not equal to b<br/>";
         }else {
            echo "TEST4 : a is equal to b<br/>";
         }

         if( $a >= $b ) {
            echo "TEST5 : a is either greater than or equal to b<br/>";
         }else {
            echo "TEST5 : a is neither greater than nor equal to b<br/>";
         }

         if( $a <= $b ) {
            echo "TEST6 : a is either less than or equal to b<br/>";
         }else {
            echo "TEST6 : a is neither less than nor equal to b<br/>";
         }

//Logical Operator
 if( $a and $b ) {
            echo "TEST2 : Both a and b are true<br/>";
         }else{
            echo "TEST2 : Either a or b is false<br/>";
         }

         if( $a || $b ) {
            echo "TEST3 : Either a or b is true<br/>";
         }else{
            echo "TEST3 : Both a and b are false<br/>";
         }
?>
