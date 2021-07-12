<?php
include "config.php";


if (isset($_POST['log_in'])) {

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);


    if ($username != "" && $password != "") {

        $sql_query = "select count(*) as cntUser from users where username='" . $username . "' and password='" . md5($password) . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['username'] = $username;
            header('Location: home.php');
        } else {
            echo "Invalid username and password";
        }
    }
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Page</title>
    <meta name="author" content="Abdulmalik" />
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="strap.css">
</head>

<body>
    <div class="container">
        <div class="contact-form-layouts">
            <h5 class="cont-form">CSEFirst Group1 Login</h5>
            <form method="post" action="" class="register-wthree form-group">
                <div class="form-group">
                    <label for="username">Username/Matric No:</label>
                    <input class="form-control" type="text" placeholder="Matric Number" id="username" name="username" required data-error="Please enter your Username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" placeholder="********" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="log_in" class="mt-4 btn btn-w3layouts btn-block btn-success text-white w-100 font-weight-bold text-uppercase">Login</button>
                </div>
            </form>
            <p class="lol">
                <a href="register.php">Not Registered Yet? Sign Up!</a>
            </p>
        </div>
    </div>

</body>

</html>