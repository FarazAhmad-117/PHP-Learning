<?php


function happy_birthday($age)
{
    echo "<p>Hello Bro!</p>";
    echo "<strong>Happy Birthday!</strong>";
    echo "<p>Today is your lucky day.</p>";
    echo "<p>Now you are $age years old.</p>";
}


happy_birthday(23);


function is_even($number)
{
    return $number % 2 == 0;
}

$num = 33;
if (is_even($num)) {
    echo "<p>$num is even</p>";
} else {
    echo "<p>$num is odd</p>";
}


function hypotenus(int $a, int $b)
{
    return sqrt($a ** 2 + $b ** 2);
}

$side1 = 3;

$side2 = 4;

$hypotenuse = hypotenus($side1, $side2);

echo "<p>The hypotenuse is $hypotenuse</p>";

?>