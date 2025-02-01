<?php


include("database.php");

$username = "Hafizsab";
$password = "password";
$hash = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (username, password)
        VALUES ('$username','$hash')";

try {
    mysqli_query($conn, $sql);

    echo " <h2>User created successfully!</h2>";
} catch (mysqli_sql_exception) {
    echo "Error creating user";
}


mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting Data using PHP</title>
</head>
<body>

</body>
</html>