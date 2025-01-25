<?php

$capitals = array("Pakistan" => "Islamabad", "Bangladesh" => "Dhaka", "USA" => "Washington DC");

echo "Capital of USA: {$capitals["USA"]}";

$capitals["China"] = "Beijing";

$keys = array_keys($capitals);

echo "<br>All countries: ";

foreach ($keys as $key) {
    echo "<br>" . $key;
}

foreach ($capitals as $key => $value) {
    echo "<br>Capital of " . $key . ": " . $value;
}

?>