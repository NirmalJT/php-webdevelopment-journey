<?php
$temp = 15;
$cloudy = true;
if ($temp >= 0 || $temp <= 30) {
    echo "The weather is good <br>";
} else {
    echo "The weather is bad <br>";
}
if (!$cloudy) {
    echo "It is Sunny <br>";
} else {
    echo "It is Cloudy <br>";
}
$age = 25;
$citizen = true;
if ($age <= 18 && !$citizen) {
    echo "You  can not Vote";
} else {
    echo "You can vote";
}
