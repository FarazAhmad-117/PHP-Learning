<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths</title>
</head>
<body>
    <form action="math.php" method="post">
        <label for="x">x</label>
        <input type="text" id="x" name="x"><br />
        <label for="y">y</label>
        <input type="text" id="y" name="y"><br />
        <label for="radius">radius:</label>
        <input type="text" id="radius" name="radius"><br />
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $x = isset($_POST["x"]) ? $_POST["x"] : null;
    $y = isset($_POST["y"]) ? $_POST["y"] : null;
    $radius = isset($_POST["radius"]) ? $_POST["radius"] : null;

    if ($x !== null) {
        $total = abs($x);
        echo "<p>The absolute value is $total</p>";
        $round = round($x);
        echo "<p>The rounded value is $round</p>";
        $floor = floor($x);
        echo "<p>The floor value is $floor</p>";
        $ceil = ceil($x);
        echo "<p>The ceil value is $ceil</p>";
    } else {
        echo "No value entered for x";
    }

    $pi = pi();
    echo "<p>The pi value is $pi</p>";

    if ($x !== null && $y !== null) {
        $pow = pow($x, $y);
        echo "<p?>The $x to power of $y is $pow</p>";
    }

    if ($radius !== null) {
        $circumference = 2 * $pi * $radius;
        $circumference = round($circumference, 2);
        $area = $pi * pow($radius, 2);
        $area = round($area, 2);
        $volume = 4 / 3 * $pi * pow($radius, 3);
        $volume = round($volume, 2);
        echo "<p>The area of a circle with radius $radius is {$area}cm<sup>2</sup></p>";
        echo "<p>The circumference of a circle with radius $radius is {$circumference}cm</p>";
        echo "<p>The volume of a sphere with radius $radius is {$volume}cm<sup>3</sup></p>";
    }
}


?>