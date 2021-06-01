<?php
    $userexists = 0;
    $passmissmatch = 0;
    $success = 0;
    $emptypass = 0;
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'connection.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        //$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $file = $_FILES['profile-pic'];
        $file_name = $file['name'];
        $file_type = $file['type'];
        $file_size = $file['size'];
        $file_temp_loc = $file['tmp_name'];
        $file_err = $file['error'];
        $file_store = 'picturestorage/'.$file_name;

        if (!file_exists('picturestorage')) {
            mkdir('picturestorage', 0777, true);
        }

        $sql = "select * from registration where username='$username'";

        $result = mysqli_query($con, $sql);

        if ($result) {

            $num = mysqli_num_rows($result);

            if ($num > 0) {

                // "User already exists";
                $userexists = 1;
            
            } else {

                if(empty($password) or empty($cpassword)){

                    //Empty password
                    $emptypass = 1;

                } elseif($password===$cpassword){
                    if(move_uploaded_file($file_temp_loc, $file_store)){
                        $profile_picture =  $file_store;
                        $sql = "insert into `registration`(username, password, profileimg) values('$username', '$password', '$file_store')";
                        $result  = mysqli_query($con, $sql);
                        if ($result) {

                            // echo "Signed up successfully.";
                            $success = 1;
                            // header('location:login.php');
                        } else {
                            die(mysqli_error($con));
                        }
                    }
                    
                } else {
                    // echo "Passwords did not match !!";
                    $passmissmatch = 1;
                }   
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

        .signup-card {
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
    <form action="" method="POST" class="signup-card" enctype="multipart/form-data">
        <h2>Signup to FinSource</h2>
        <?php

            if(isset($_POST['submit'])){
                // your code
                if($userexists){
                    echo '<p class="failure">*OOPS !! User already exists.*<p>';
                }
                if($passmissmatch){
                    echo '<p class="failure">*Password did not match.*<p>';
                }
                if($emptypass){
                    echo '<p class="failure">*Password cannot be empty.*<p>';
                }
                if($success){
                    echo '<p class="success">*Signed Up Successfully.*<p>';
                    echo '<p class="success">Go to login page : <a href="login.php">Login here</a><p>';
                }
            }
            
        ?>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="cpassword" placeholder="Confirm Password">
        <label for="Profile Picture">Please add a profile picture : </label>
        <input type="file" name="profile-pic" placeholder="Profile picture">
        <input type="submit" value="Sign up" name="submit" id="login-btn">

        <p>Alredy have an account ?</p>
        <a href="login.php">Login in.</a>
    </form>
</body>

</html>