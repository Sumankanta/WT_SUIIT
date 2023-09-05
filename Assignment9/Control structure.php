<?php
$a = 10;
$b = 2;
$c = 11;

// if Statement
if ($a < $b) {
    echo "B is grater";
}

// if else Statement
if ($a < $b) {
    echo "B is grater";
} else {
    echo "A is grater<br>";
}

// if, else if, else
if ($a > $b && $a > $c) {
    echo "A is greater";
} else if ($b > $c && $b > $a) {
    echo "B is greater";
} else {
    echo "C is greater<br>";
}

// switch statement
switch ($b) {
    case 1:
        echo "Chagan";
        break;
    case 2:
        echo "Bhagwana";
        break;
    case 3:
        echo "Chabila";
        break;
    case 4:
        echo "Sabda";
        break;
    default:
        echo "Magsira";
}


?>