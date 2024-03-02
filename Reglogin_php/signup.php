<?php
session_start();

    include("connect.php");
    include("functions.php"); 

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password))
        {
            $user_id = random_num(20);
            $query = "insert into users (user_id,email,password) values ('$user_id','$email','$password')";

            mysqli_query($con,$query);

            header("Location: login.php");
            die;
        }
        else
        {
            echo "Kindly enter a valid information!";
        }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Sign Up Page</title>
</head>
<body>
    <h2>SIGNUP FORM</h2>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input id="text" type="text" class="form-control"  name="email"/>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input id="text" type="password" class="form-control"  name="password"/>
            </div>
            <input id="button" type="submit" class="btn btn-primary" value="signup"/> <br>

            <a href="login.php">Login Here</a><br><br>
        </form>
    </div>
</body>
</html>