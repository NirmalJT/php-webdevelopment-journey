<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="circle-formula.php" method="post">
        <label for="radius">Enter Radius of the circle</label>
        <br>
        <input type="text" name="radius">
        <input type="submit">
    </form>


</body>

</html>
<?php

$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;
$circumference = round(2 * pi() * $radius, 2);
$area = round(pi() * pow($radius, 2), 2);
$volume = round(4 / 3 * pi() * pow($radius, 3), 2);
echo "The area of the circle of radius {$radius} is {$area} <br>";
echo "The circumference of the circle of radius {$radius} is {$circumference} <br>";

echo "The volume of the sphere of radius {$radius} is {$volume}";

?>