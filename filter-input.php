<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="filter-input.php" method="post">
        <label for="username">Username</label>
        <br>
        <input type="text" name="username">
        <br>

        <label for="age">Age</label>
        <br>
        <input type="text" name="age">
        <br>
        <label for="email">Email</label>
        <br>
        <input type="text" name="email">
        <br>
        <br>
        <input type="submit" value="login" name="login">


    </form>

</body>

</html>
<?php
//senitizing input
// if (isset($_POST["login"])) {
//     $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
//     $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
//     $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
//     echo $username;
//     echo "You are {$age} years old";
//     echo $email;
// }
//validate input
if (isset($_POST["login"])) {
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if (empty($email)) {
        echo "The email is invalid <br>";
    } else {
        echo "Your email is {$email} <br>";
    }
    if (empty($age)) {
        echo "The age is invalid";
    } else {
        echo "Your  age is {$age}";
    }
}
?>