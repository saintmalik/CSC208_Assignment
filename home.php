<?php
include "config.php";

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
} else {
    $query = "SELECT * FROM students WHERE username = " . $_SESSION["username"];
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $user_data = $row;
}
// if ($_SESSION["username"]) {
//     $query = "SELECT * FROM students WHERE username = " . $_SESSION["username"];
//     $result = mysqli_query($con, $query);
//     $row = mysqli_fetch_array($result);
//     $user_data = $row;
// } else {
//     header('Location: login.php');
// }

if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: login.php');
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <meta name="author" content="Abdulmalik" />
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="strap.css">
</head>

<body>
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
        <tr class="tableheader">
            <td align="center">User Dashboard</td>
        </tr>
        <tr class="tablerow">
            <td>
                <div id="reg-head" class="headrg">Your Profile</div>
                <table border="0" align="center" cellpadding="2" cellspacing="0">
                    <tr id="lg-1">
                        <td class="tl-1">
                            <div align="left" id="tb-name">Matric No/Username:</div>
                        </td>
                        <td class="tl-4"><?php echo $user_data['username']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1">
                            <div align="left" id="tb-name">Name:</div>
                        </td>
                        <td class="tl-4"><?php echo $user_data['name']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1">
                            <div align="left" id="tb-name">Group Of:</div>
                        </td>
                        <td class="tl-4"><?php echo $user_data['groupof']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1">
                            <div align="left" id="tb-name">Sex:</div>
                        </td>
                        <td class="tl-4"><?php echo $user_data['sex']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1">
                            <div align="left" id="tb-name">Phone Number:</div>
                        </td>
                        <td class="tl-4"><?php echo $user_data['phonenum']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1">
                            <div align="left" id="tb-name">Email:</div>
                        </td>
                        <td class="tl-4"><?php echo $user_data['email']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1">
                            <div align="left" id="tb-name">Address:</div>
                        </td>
                        <td class="tl-4"><?php echo $user_data['address']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1">
                            <div align="left" id="tb-name">Next Of Kin:</div>
                        </td>
                        <td class="tl-4"><?php echo $user_data['nxtkin']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1">
                            <div align="left" id="tb-name">Next Of Kin Phone Number:</div>
                        </td>
                        <td class="tl-4"><?php echo $user_data['phonenum_nxtkin']; ?></td>
                    </tr>
                </table>
                <form method='post' action="">
                    <input type="submit" value="Logout" name="but_logout">
                </form>
                <a href="index.php">Homepage</a>
</body>

</html>