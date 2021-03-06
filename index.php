<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Fin-Source</title>
    <link rel="icon" href="./Media/logo.svg">
    <link rel="stylesheet" href="style.css">
    <script src="./js/index.js" defer></script>
    <script src="./js/top.js" defer></script>
</head>

<body>

    <div class="container">
        <div class="header-section">
            <div class="logo-section">
                <img src="Media/logo.svg" width="48px">
            </div>
            <div class="search-section">
                <img id="search-img" src="Media/search.svg" width="16px">
                <input type="text" id="search-text" placeholder="Search something . .">
            </div>
            <div class="profile-section">
                <?php
                    if(!isset($_SESSION['username'])){
                        echo '<img class="profile-pic" style="display:none">';
                    } else {
                         echo '<img class="profile-pic" src="FinSourceRegistration/'.$_SESSION['profile_picture'].'" >';
                    }
                ?>
                
                <?php
                    if(!isset($_SESSION['username'])){
                        echo '<a href="FinSourceRegistration/login.php" class="login-btn">Login</a>';
                    } else {
                        echo '<a href="FinSourceRegistration/logout.php" class="logout-btn">Logout</a>';
                    }
                ?>
            </div>
        </div>
        <div class="content">
            <div class="left-column">
                <a href="index.php" class="nav-items" style="background-color: rgb(233, 233, 233);">
                    <img src="Media/nav-item-icons/dashboard.svg" class="nav-item-icon" class="nav-item-icon">
                    <p>Dashboard</p>
                </a>

                <a href="./src/stocks.php" class="nav-items">
                    <img src="Media/nav-item-icons/stocks.svg" class="nav-item-icon">
                    <p>Stocks</p>
                </a>

                <a href="./src/crypto.php" class="nav-items">
                    <img src="Media/nav-item-icons/cryptocurrency.svg" class="nav-item-icon">
                    <p>Crypto</p>
                </a>

                <a href="./src/indian-banks.php" class="nav-items">
                    <img src="Media/nav-item-icons/bank-building.svg" class="nav-item-icon">
                    <p>Indian Banks</p>
                </a>

                <a href="./src/help-and-support.php" class="nav-items">
                    <img src="Media/nav-item-icons/technical-support.svg" class="nav-item-icon">
                    <p>Help and support</p>
                </a>

                <a href="./src/contact-us.php" class="nav-items">
                    <img src="Media/nav-item-icons/contact.svg" class="nav-item-icon">
                    <p>Contact Us</p>
                </a>
            </div>
            <div class="middle-column">
                <div class="top-content">
                    <h3 class="username">Hi, <?php 
                                                if(!isset($_SESSION['username'])){
                                                    echo 'Please sign in.';
                                                } else {
                                                echo $_SESSION['username'], "!";
                                                }
                                            ?>
                    </h3>
                    <div class="data-part">
                        <div class="data">
                            <h2 id="value1">??? 72.69</h2>
                            <p id="change1">USD - INR</p>
                        </div>
                        <div class="data">
                            <h2 id="value2"></h2>
                            <p id="change2"></p>
                        </div>
                    </div>
                    <!-- <div class="quote-section">
                        <h4 id="quote">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, ipsum!</h4>
                        <p id="author">- Lorem ipsum</p>
                    </div> -->
                </div>
                <div class="bottom-content">
                    <div class="recent-news">
                        <h3 class="title">Recent News</h3>
                        <ul class="news-list">
                            <li id="news1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, cum.</li>
                            <li id="news2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, neque.</li>
                            <li id="news3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, neque.</li>
                            <li id="news4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, neque.</li>
                            <li id="news5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, neque.</li>
                        </ul>
                    </div>
                    <ul class="popular-today" id="popular-today">
                        <h3 class="title">Popular Today</h3>
                        <li>
                            <h4 class="company-name"></h4>
                            <p class="value"></p>
                        </li>

                        <li>
                            <h4 class="company-name"></h4>
                            <p class="value"></p>
                        </li>

                        <li>
                            <h4 class="company-name"></h4>
                            <p class="value"></p>
                        </li>

                        <li>
                            <h4 class="company-name"></h4>
                            <p class="value"></p>
                        </li>

                        <li>
                            <h4 class="company-name"></h4>
                            <p class="value"></p>
                        </li>

                        <li>
                            <h4 class="company-name"></h4>
                            <p class="value"></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-column">
                <h3 class="title">Investment Ideas</h3>
                <div class="card" id="dropbox">
                    <div class="card-upper">
                        <h4 class="company-name">DropBox</h4>
                        <img src="Media/company-logo/dropbox.svg" class="company-icon">
                    </div>
                    <div class="card-bottom">
                        <div class="card-bottom-element">
                            <p>Current Price</p>
                            <p id="price">$25.38</p>
                        </div>
                        <div class="card-bottom-element">
                            <p>Predicted Price</p>
                            <p id="predicted-price">$26.90</p>
                        </div>
                    </div>
                </div>
                <div class="card" id="seagate">
                    <div class="card-upper">
                        <h4 class="company-name">Seagate</h4>
                        <img src="Media/company-logo/seagate.jpg" class="company-icon">
                    </div>
                    <div class="card-bottom">
                        <div class="card-bottom-element">
                            <p>Current Price</p>
                            <p id="price">$97.97</p>
                        </div>
                        <div class="card-bottom-element">
                            <p>Predicted Price</p>
                            <p id="predicted-price">$111</p>
                        </div>
                    </div>
                </div>
                <div class="card" id="facebook">
                    <div class="card-upper">
                        <h4 class="company-name">Facebook</h4>
                        <img src="Media/company-logo/Facebook.png" class="company-icon">
                    </div>
                    <div class="card-bottom">
                        <div class="card-bottom-element">
                            <p>Current Price</p>
                            <p id="price">$315.9</p>
                        </div>
                        <div class="card-bottom-element">
                            <p>Predicted Price</p>
                            <p id="predicted-price">$350</p>
                        </div>
                    </div>
                </div>
                <div class="card" id="spotify">
                    <div class="card-upper">
                        <h4 class="company-name">Spotify Technology SA</h4>
                        <img src="Media/company-logo/Spotify.png" class="company-icon">
                    </div>
                    <div class="card-bottom ">
                        <div class="card-bottom-element ">
                            <p>Current Price</p>
                            <p id="price ">$223.59</p>
                        </div>
                        <div class="card-bottom-element ">
                            <p>Predicted Price</p>
                            <p id="predicted-price ">$245.69</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-section">
            <div class="footer-left">
                <p>Made by : Aditya & Keshav</p>
            </div>
            <div class="footer-right">
                <a href="https://github.com/finsource/webapp" target="_blank"><img src="Media/github-logo.svg" class="github-logo"></a>
            </div>
        </div>
    </div>

</body>

</html>