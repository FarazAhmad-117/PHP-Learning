<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize the inputs</title>
</head>
<body>
    <form action="sanitize.php" method="post">
        <label for="input">Enter the text:</label>
        <input type="text" id="input" name="input">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // if (isset($_POST["input"])) {
    //     $input = $_POST["input"];
    //     echo "You wrote $input";
    // }

    if (isset($_POST["input"])) {
        $input = filter_input(INPUT_POST, "input", FILTER_SANITIZE_SPECIAL_CHARS);
        echo "You wrote $input";
    }
}

?>