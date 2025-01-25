<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home of the website secured by session</title>
</head>
<body>
    <h1>Welcome to the Homepage</h1>
    <?php

    $username = $_SESSION["username"];
    $password = $_SESSION["password"];

    if (empty($username) || empty($password)) {
        header("Location: sessions.php");
        exit;
    }

    echo "<p>Hello, $username! You have successfully logged in using a secure session.</p>";

    ?>
</body>
</html>