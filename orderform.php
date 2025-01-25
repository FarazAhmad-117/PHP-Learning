<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
</head>
<body>
    <form action="orderform.php" method="post">
        <label for="">Quantity:</label><br />
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php

$item = "pizza";
$price = 5.46;
$quantity = $_POST['quantity'];
$total = $price * $quantity;

echo "Your order for $quantity $item(s) costs $total.</h2>";

?>