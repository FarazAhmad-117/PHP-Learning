<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="get">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter you email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter you email">
        </div>
        <input type="submit">
    </form>
    <form action="index2.php" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter you username">
        </div>
        <input type="submit">
    </form>
</body>
</html>


<?php

echo "<h3>Email : {$_GET["email"]}</h3>";
echo "<h4>Password: {$_GET["password"]}</h4>";

echo "<h2>Username: {$_POST["username"]}</h2>";

?>