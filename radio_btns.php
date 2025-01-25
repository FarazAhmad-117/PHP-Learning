<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons</title>
</head>
<body>
    <form action="radio_btns.php" method="post">
        <input type="radio" name="card" value="Visa">Visa <br />
        <input type="radio" name="card" value="Mastercard">Mastercard <br />
        <input type="radio" name="card" value="Express">Express <br />
        <input type="submit" value="Confirm" name="confirm">
    </form>
</body>
</html>

<?php

if (isset($_POST["confirm"])) {
    if (isset($_POST["card"])) {
        echo "Selected Card: " . $_POST["card"];
    } else {
        echo "No card selected.";
    }
}

?>