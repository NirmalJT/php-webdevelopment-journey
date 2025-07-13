<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="login.php" method="get">
        <label for="username">Username</label>
             <br>
        <input type="text" name="username">
        <br>
        <br>
        <label for="Password">Password</label>
             <br>
        <input type="password" name="password">
             <br>
        <input type="submit" value="Log in">
    </form>
</body>

</html>
<?php

echo $_GET["username"];
echo $_GET["password"];
?>