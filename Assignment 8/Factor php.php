<?php
// PHP program to find factors of a number using the for loop

$x = 90;
echo "The factors of the " . $x . " are: ";

for ($i = 1; $i <= $x; ++$i)
{
    if ($x % $i == 0)
    {
        echo $i . " ";
    }
}

?>