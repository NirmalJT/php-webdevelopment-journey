<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="pizza-order.php" method="post">
        <label for="quantity">Quantity</label>
        <br>
        <input type="text" name="quantity">
        <br>
        <input type="submit" value="total">
    </form>

</body>

</html>
<?php
$item = "pizza";
$price = 5.66;
$quantity = $_POST["quantity"];
$total = $quantity * $price;
echo "You have ordered {$quantity}  x {$item}s <br>";
echo "Your total is \${$total}";
?>