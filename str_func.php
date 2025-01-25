<?php

// Some string functions to be practiced

$string = "Hello, World!<br/>";

echo strtolower($string);
echo strtoupper($string);
echo str_pad($string, 20, "_");
echo str_replace("e", "E", $string);
echo strrev("Faraz Ahmad");
echo "<br/>";
$arr = explode(",", $string);

foreach ($arr as $word) {
    echo $word . "<br/>";
}

echo implode(" ", $arr);

?>