<?php
$foods = array("Mango", "Orange", "Banana", "Coconut");
echo $foods[0] . "<br>";
echo $foods[1] . "<br>";
echo $foods[2] . "<br>";
echo "<hr>";

//Aray methods
array_push($foods, "apple");
array_pop($foods);
$foods = array_reverse($foods);
array_shift($foods);
echo count($foods) ."<br>";
foreach ($foods as $food) {
    echo $food . "<br>";
}
