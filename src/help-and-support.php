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

                <a href="../src/indian-banks.php " class="nav-items ">
                    <img src="../Media/nav-item-icons/bank-building.svg " class="nav-item-icon ">
                    <p>Indian Banks</p>
                </a>

                <a href="../src/help-and-support.php " class="nav-items" style="background-color: rgb(233, 233, 233);">
                    <img src="../Media/nav-item-icons/technical-support.svg " class="nav-item-icon ">
                    <p>Help and support</p>
                </a>

                <a href="../src/contact-us.php " class="nav-items ">
                    <img src="../Media/nav-item-icons/contact.svg " class="nav-item-icon ">
                    <p>Contact Us</p>
                </a>
            </div>
            <div class="help-and-support">
                <div class="help-and-support-poster-section">
                    <img src="../Media/help-and-support.svg" class="help-and-support-poster-image" alt=" ">
                </div>
                <div class="team-section ">
                    <h4 class="help-and-support-text">Team members</h4>
                    <div class="member-card-section">
                        <div class="member-card ">
                            <div class="member-card-left">
                                <img src="../Media/team/member1.svg " class="member-profile-photo " alt=" ">
                            </div>
                            <div class="member-card-right">
                                <h3 class="member-name ">Aditya Sharma</h3>
                                <p class="member-mastery ">JavaScript and APIs</p>
                                <a href="https://github.com/adityasharma3" class="follow-btn" target="_blank">Follow</a>
                            </div>
                        </div>
                        <div class="member-card ">
                            <div class="member-card-left">
                                <img src="../Media/team/member2.svg " class="member-profile-photo " alt=" ">
                            </div>
                            <div class="member-card-right">
                                <h3 class="member-name ">Keshav Yadav</h3>
                                <p class="member-mastery ">UI and UX</p>
                                <a href="https://github.com/kecav" class="follow-btn" target="_blank">Follow</a>
                            </div>
                        </div>
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