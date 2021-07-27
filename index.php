<?php
include "config.php";

// Check user login or not
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSC 208 Web Programming Group Assignment</title>
    <meta name="author" content="Abdulmalik" />
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="strap.css">
</head>

<body>
    <div class="hmp" align="center">
        <h4>Welcome Back!!!, <?php echo $_SESSION['username']; ?> </h4><br/>
        <a href="home.php"><button>View Your Own Profile</button></a><br/><br/><br/>
        <h3>Members in CSC Edu Group 1</h3><br/>
    </div>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item">ADEKOLA TIMILEYIN JOEL</li>
            <li class="list-group-item">HASSAN DANIEL ADEDAYO</li>
            <li class="list-group-item">SALAWU ABDULMALIK ADEWALE</li>
            <li class="list-group-item">OGUNTOYINBO ESTHER</li>
            <li class="list-group-item">ADEBAYO IFEOLUWA</li>
            <li class="list-group-item">AKINOLA AKINYINKA</li>
            <li class="list-group-item">MURTALA TEMITOPE</li>
            <li class="list-group-item">OSOMADE LATEEF</li>
            <li class="list-group-item">JEMILEHIN OLUWATOSIN</li>
            <li class="list-group-item">SOMADE-IDOWU ROFIAT</li>
            <li class="list-group-item">AYODELE ABIMBOLA</li>
            <li class="list-group-item">BABALOLA AYOMIPOSI</li>
            <li class="list-group-item">DAMILOLA OLADEJI</li>
            <li class="list-group-item">ADEBAYO AYOBAMI EMMANUEL</li>
            <li class="list-group-item">OKEKUNLE OYEYEMI RIDWAN</li>
        </ol>
</body>

</html>
