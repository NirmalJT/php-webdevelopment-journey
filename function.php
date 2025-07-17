<?php
function happy_birthday($name, $age)
{
    echo "Happy birthday dear {$name} <br>";
    echo "Happy birthday to  {$name} <br>";
    echo "Happy birthday dear  {$name}  <br>";
    echo " {$name} are {$age} years old <br>";
}
function is_even($number)
{
    if ($number % 2 == 0) {
        echo $number . " is a even number";
    } else {
        echo "{$number} is a odd number";
    }
}
function hypotenious(float $a , float $b)
{
    $c=sqrt($a**2+$b**2);
    return $c;
}

// happy_birthday("Nirmal", 34);
// echo "<br>";
// happy_birthday("Humen", 55);
// is_even(6);
echo "hypotenious is ".hypotenious(3,4);
