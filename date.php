<?php

$day = date("l");

echo "<p>The day is $day</p>";

switch ($day) {
    case "Monday":
        echo "<p>Today is Monday. It's a workday.</p>";
        break;
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
    case "Friday":
        echo "<p>Today is a weekday. It's a workday.</p>";
        break;
    case "Saturday":
    case "Sunday":
        echo "<p>Today is a weekend day. It's a weekend.</p>";
        break;
    default:
        echo "<p>Invalid day of the week.</p>";
}

?>