<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="array-practice.php" method="post">
        <label for="Country">Enter country name</label>
        <input type="text" name="country">
        <input type="submit" value="Submit">
    </form>

</body>

</html>
<?php
$capitals = array(
    "USA" => "Washington D.C",
    "Japan" => "Kyoto",
    "India" => "New Delhi",
    "South Korea" => "Seoul"
);

$capital = $capitals[$_POST["country"]];
echo "The capital of {$_POST["country"]} is {$capital}";
?>