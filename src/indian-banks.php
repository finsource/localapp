<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fin-Source</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../js/banks.js" defer></script>
</head>

<body>

    <div class="container">
        <div class="header-section">
            <div class="logo-section">
                <img src="../Media/logo.svg" width="48px">
            </div>
            <div class="search-section">
                <img class="search-img" src="../Media/search.svg" width="16px">
                <input type="text" id="search-text" placeholder="Search something . .">
            </div>
            <div class="profile-section">
                <?php
                    if(!isset($_SESSION['username'])){
                        echo '<img class="profile-pic" style="display:none">';
                    } else {
                        echo '<img class="profile-pic" src="../FinSourceRegistration/'.$_SESSION['profile_picture'].'" >';
                    }
                ?>
                
                <?php
                    if(!isset($_SESSION['username'])){
                        echo '<a href="../FinSourceRegistration/login.php" class="login-btn">Login</a>';
                    } else {
                        echo '<a href="../FinSourceRegistration/logout.php" class="logout-btn">Logout</a>';
                    }
                ?>
            </div>
        </div>
        <div class="content">
            <div class="left-column">
                <a href="../index.php" class="nav-items">
                    <img src="../Media/nav-item-icons/dashboard.svg" class="nav-item-icon" class="nav-item-icon">
                    <p>Dashboard</p>
                </a>

                <a href="../src/stocks.php" class="nav-items">
                    <img src="../Media/nav-item-icons/stocks.svg" class="nav-item-icon">
                    <p>Stocks</p>
                </a>

                <a href="../src/crypto.php" class="nav-items">
                    <img src=" ../Media/nav-item-icons/cryptocurrency.svg" class="nav-item-icon ">
                    <p>Crypto</p>
                </a>

                <a href="../src/indian-banks.php " class="nav-items" style="background-color: rgb(233, 233, 233);">
                    <img src="../Media/nav-item-icons/bank-building.svg " class="nav-item-icon ">
                    <p>Indian Banks</p>
                </a>

                <a href="../src/help-and-support.php " class="nav-items ">
                    <img src="../Media/nav-item-icons/technical-support.svg " class="nav-item-icon ">
                    <p>Help and support</p>
                </a>

                <a href="../src/contact-us.php " class="nav-items ">
                    <img src="../Media/nav-item-icons/contact.svg " class="nav-item-icon ">
                    <p>Contact Us</p>
                </a>
            </div>
            <div class="indian-banks">
                <div class="bank-image-section">
                    <img src="../Media/indian-banks/locate-bank.svg" alt="" class="bank-img">
                </div>
                <div class="bank-bottom-section">
                    <h3 class="ifsc-label-text">Enter IFSC code of any bank to get deatails of it.</h3>
                    <div class="ifsc-section">
                        <input type="text" id="ifsc_input" placeholder="Input IFSC code">
                        <input type="button" id="submit_ifsc" value="Search">
                        <input type="button" id="reset_ifsc" value="reset">
                    </div>
                    <div class="output-section" id="output">

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-section ">
            <div class="footer-left ">
                <p>Made by : Aditya & Keshav</p>
            </div>
            <div class="footer-right ">
                <a href="https://github.com/finsource/webapp " target="_blank "><img src="../Media/github-logo.svg " class="github-logo "></a>
            </div>
        </div>
    </div>

</body>

</html>