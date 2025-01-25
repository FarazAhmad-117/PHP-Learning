<?php
// A session id SGV used to store user info to be used on multiple pages

// TO Start a session:
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Username: " . $username . " Password: " . $password;

    echo "<div>Session Calll!!! </div>";

    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    header("Location: home.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login Form</title>
    <style>
        body {
            background: #000;
            color: #fff;
        }

        .card {
            border: none;
            min-height: 420px
        }

        .forms-inputs {
            position: relative
        }

        .forms-inputs span {
            position: absolute;
            top: -18px;
            left: 10px;
            background-color: #fff;
            padding: 5px 10px;
            font-size: 15px
        }

        .forms-inputs input {
            height: 50px;
            border: 2px solid #eee
        }

        .forms-inputs input:focus {
            box-shadow: none;
            outline: none;
            border: 2px solid #000
        }

        .btn {
            height: 50px
        }

        .success-data {
            display: flex;
            flex-direction: column
        }

        .bxs-badge-check {
            font-size: 90px
        }
    </style>
</head>
<body>
    <h2 class="text-center mt-5 text-white">Log In Page</h2>
    <div>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <form action="sessions.php" method="post" class="card px-5 py-5" id="form1">
                        <div class="form-data" v-if="!submitted">
                            <div class="forms-inputs mb-4"> <span>Email or username</span> <input type="text"
                                    name="username">
                            </div>
                            <div class="forms-inputs mb-4"> <span>Password</span> <input type="password"
                                    name="password">
                            </div>
                            <div class="mb-3"> <button type="submit" class="btn btn-dark w-100">Login</button> </div>
                            <a href="/home.php">Home</a>
                        </div>
                        <div class="success-data" v-else>
                            <div class="text-center d-flex flex-column"> <i class='bx bxs-badge-check'></i> <span
                                    class="text-center fs-5">You have been logged in <br> Successfully</span> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>