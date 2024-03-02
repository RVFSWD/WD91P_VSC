<?php
session_start();

$_SESSION;

include("connect.php");
include("functions.php"); 

$user_data = check_login($con);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a href="logout.php"> LOGOUT </a>
    <h2> User Dashboard </h2>

    Hi, <?php echo $user_data['email']; ?>


</body>
</html>