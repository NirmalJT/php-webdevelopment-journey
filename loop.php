<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="loop.php" method="post">
        <label for="number">Enter the number</label>
        <input type="text" name="count">
        <input type="submit" value="Start">
        <br>
        <input type="submit" name="stop" value="Stop">
    </form>

</body>


</html>
<?php
$number = $_POST["count"];
for ($i = 0; $i <= $number; $i++) {
    // echo $i . "<br>";
}
$seconds = 0;
$running = true;
while ($running) {
    if (isset($_POST["stop"])) {
        $running = false;
    } else {
        $seconds++;
        echo $seconds . "<br>";
    }
}

?>