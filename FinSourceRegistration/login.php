<?php
    $invaliduser = 0;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'connection.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        // $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        // $passCheck = password_verify($password, $hashedPwd);
        $sql = "select * from registration where username='$username' and password='$password'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {

                //Login Successful
                session_start();
                $row = mysqli_fetch_array($result);

                // Declare username and profile picture throughout the session
                $_SESSION['username'] = $username;
                $_SESSION['profile_picture'] = $row['profileimg'];

                header("Location: ../index.php");
                exit;
            } else {

                // Invalid user
                $invaliduser = 1;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinSource Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #315186;
        }

        .login-card {
            padding: 2rem;
            border-radius: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            width: 30rem;
        }

        input {
            margin: 1rem auto;
            padding: 0.5rem 1rem;
            border: none;
            outline: none;
            width: -webkit-fill-available;
            background: antiquewhite;
        }

        #login-btn {
            color: #fff;
            background-color: #315186;
        }

        .sucess{
            /* padding: 1rem 0.5rem;
            background-color: green; */
            color: #fff;
        }

        .failure{
            padding: 0.5rem;
            /* background-color: red; */
            color: red;
        }
    </style>
</head>

<body>
    <form action="" method="POST" class="login-card">
        <h2>Login to FinSource</h2>

        <?php

            if(isset($_POST['submit'])){
                // your code
                if($invaliduser){
                    echo '<p class="failure">*Invalid username or password.*<p>';
                }
            }
            
        ?>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Login" id="login-btn">

        <p>Dont have an account ?</p>
        <a href="signup.php">Sign up</a>
    </form>
</body>

</html>