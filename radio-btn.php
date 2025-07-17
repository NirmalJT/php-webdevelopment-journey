<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="radio-btn.php" method="post">
        <input type="radio" name="credit-card" value="Rupay">
        Rupay <br>
        <input type="radio" name="credit-card" value="Visa">
        Visa <br>
        <input type="radio" name="credit-card" value="Master-Card">
        Master-Card <br>
        <input type="radio" name="credit-card" value="American-Express">
        American-Express <br>
        <input type="submit" name="confirm" value="Confirm">
    </form>

</body>

</html>
<?php
if (isset($_POST["confirm"])) {
    $credit_card = null;
    if (isset($_POST["credit-card"])) {
        $credit_card = $_POST["credit-card"];
    }
    // if ($credit_card == "Rupay") {
    //     echo "You have selected {$credit_card} credit card for the transaction";
    // } elseif ($credit_card == "Visa") {
    //     echo "You have selected {$credit_card} credit card for the transaction";
    // } elseif ($credit_card == "Master-Card") {
    //     echo "You have selected {$credit_card} credit card for the transaction";
    // } elseif ($credit_card == "American-Express") {
    //     echo "You have selected {$credit_card} credit card for the transaction";
    // } else {
    //     echo "Please make a selection";
    // }
    //better way with switch statement
    switch ($credit_card) {
        case "Rupay":
            echo "You have selected {$credit_card} card for your transaction";
            break;
        case "Visa":
            echo "You have selected {$credit_card} card for your transaction";
            break;
        case "American-Express":
            echo "You have selected {$credit_card} card for your transaction";
            break;
        case "Master-Card":
            echo "You have selected {$credit_card} card for your transaction";
            break;
        default:
            echo "Please make a selection";
    }
}
?>