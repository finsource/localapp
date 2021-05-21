<?php
//     extract($_REQUEST);
//     $file=fopen("form-data.txt","a") or die("Unable to open file!");

//     if(isset($_POST["submit"]))
//     {   
//         fwrite($file, "\n");
//         fwrite($file,"Name :");
//         fwrite($file, $_POST['name']."\n");
//         fwrite($file,"Email :");
//         fwrite($file, $_POST['mail']."\n");
//         fwrite($file,"Phone :");
//         fwrite($file, $_POST['phone']."\n");
//         fwrite($file,"Message :");
//         fwrite($file, $_POST['user-message']."\n");
//         fwrite($file, "\n");
//    }
//     fclose($file);  
//     header('location: contact-us.php');

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "finsource";

    $conn = new mysqli($server, $username, $password, $dbname);
    if(isset($_POST["submit"])){
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $phone = $_POST['phone'];
        $msg = $_POST['user-message'];

        $query = "insert into form(name, mail, phone, message) values('$name', '$mail', '$phone', '$msg')";
        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if(!$run){
            echo "Connection Unsuccessful.";
        } else {
            echo '<script>alert("Sent successfully.")</script>';
        }
    }
    header('location: contact-us.php');
?>
