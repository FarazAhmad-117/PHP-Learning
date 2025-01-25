<?php

// Setting up and using the cookies
// Cookies store data as an associative array
// setcookie("theme", "dark", time() + 365 * 24 * 60 * 60, "/"); // 1 year


// To delete a cookie;
setcookie("fav_fruit", "apple", time() + 24 * 3600, "/");
setcookie("fav_lang", "js", time() + 24 * 3600, "/");
setcookie("fav_song", "none", time() + 24 * 3600, "/");


// foreach ($_COOKIE as $key => $val) {
//     echo "Cookie: $key; Value: $val<br>";
// }


if (isset($_COOKIE["fav_fruit"])) {
    echo "Your favorite fruit is: " . $_COOKIE["fav_fruit"];
}

?>