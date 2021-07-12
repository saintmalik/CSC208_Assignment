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
    <title>Homepage</title>
    <meta name="author" content="Abdulmalik" />
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="strap.css">
</head>

<body>
    <div class="hmp" align="center">
        <h4>Welcome Back!!!, <?php echo $_SESSION['username']; ?> </h4>
        <a href="home.php">View Your Own Profile</a>
        <br/><br/><br/>
        <h3>List Of Members in CSC Edu Group 1</h3><br/>
    </div>
        <ol>
            <li>ADEKOLA TIMILEYIN JOEL</li>
            <li>HASSAN DANIEL ADEDAYO</li>
            <li>SALAWU ABDULMALIK ADEWALE</li>
            <li>OGUNTOYINBO ESTHER</li>
            <li>ADEBAYO IFEOLUWA</li>
            <li>AKINOLA AKINYINKA</li>
            <li>ALI-ANITA OYIYE</li>
            <li>MURITALA TEMITOPE</li>
            <li>OSOMADE LATEEF</li>
            <li>JEMILEHIN OLUWATOSIN</li>
            <li>SOMADE-IDOWU ROFIAT</li>
            <li>AYODELE ABIMBOLA</li>
            <li>BABALOLA AYOMIPOSI</li>
            <li>DAMILOLA OLADEJI</li>
            <li>ADEBAYO AYOBAMI EMMANUEL</li>
            <li>OKEKUNLE OYEYEMI RIDWAN</li>
        </ol>
</body>

</html>