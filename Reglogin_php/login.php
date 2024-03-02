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
            $query = "select * from users where email = '$email' limit 1";

            $result = mysqli_query($con,$query);

            if($result)
            {
                if ($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header ("Location: userhome.php");
                        die;
                    }

                }
            }

            echo "Wrong email and password";
        }
        else
        {
            echo "Wrong email and password";
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login Page</title>
</head>
<body>
    <h2>LOGIN FORM</h2>
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
            <input id="button" type="submit" class="btn btn-primary" value="Login"/> <br>

            <a href="signup.php">Sign Up Here</a><br><br>
        </form>
    </div>
</body>
</html>