<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="math-function.php" method="post">
        <label for="x">x</label>
        <br>
        <input type="text" name="x">
        <br>
        <label for="y">y</label>
        <br>
        <input type="text" name="y">
        <br>
        <label for="z">z</label>
        <br>
        <input type="text" name="z">
        <input type="submit" value="result">
    </form>

</body>

</html>
<?php

$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;
// $total = abs($x);
// $total = round($x);
// $total = floor($y);
// $total = ceil($y);
// $total = sqrt($x);
// $total=pow($x,$y);
// $total=max($x,$y,$z);
// $total=min($x,$y,$z);
// $total=pi();
$total = rand(2, 9);

echo $total;

?>