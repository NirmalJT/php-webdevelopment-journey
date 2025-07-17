<?php
$capitals = array(
    "USA" => "Washington D.C",
    "Japan" => "Kyoto",
    "India" => "New Delhi",
    "South Korea" => "Seoul"
);
$capitals["USA"] = "Las Vegas";
$capitals["China"] = "Beijing";
array_pop($capitals);
array_shift($capitals);
$capital_keys = array_keys($capitals);
$values = array_values($capitals);
$capitals=array_flip($capitals);
$capitals=array_reverse($capitals);

foreach ($values as $value) {
    echo $value . "<br>";
}
echo "<br>";

foreach ($capital_keys as $key) {
    echo $key . "<br>";
}
echo "<br>";
foreach ($capitals as $key => $values) {
    echo $key . "=" . $values . "<br>";
}
