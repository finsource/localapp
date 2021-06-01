<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../js/jquery.js" defer></script>
    <!-- <script defer src="../js/contact.js"></script> -->
    <link rel="stylesheet" href="../style.css">
    <title>Fin-Source</title>
</div>
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
                    <img src="../Media/nav-item-icons/cryptocurrency.svg" class="nav-item-icon">
                    <p>Crypto</p>
                </a>

                <a href="../src/indian-banks.php" class="nav-items">
                    <img src="../Media/nav-item-icons/bank-building.svg" class="nav-item-icon">
                    <p>Indian Banks</p>
                </a>

                <a href="../src/help-and-support.php" class="nav-items">
                    <img src="../Media/nav-item-icons/technical-support.svg" class="nav-item-icon">
                    <p>Help and support</p>
                </a>

                <a href="/contact-us.php" class="nav-items" style="background-color: rgb(233, 233, 233);">
                    <img src="../Media/nav-item-icons/contact.svg" class="nav-item-icon">
                    <p>Contact Us</p>
                </a>
            </div>
            <form action="saveform.php" class="contact-us" method="post" >
                <div class="contact-design">
                    <img src="../Media/contact-page.svg" alt="" class="contact-us-image">
                </div>
                <h3>Contact Us</h3>
                <p>Please provide us few details about yourself.</p>
                <div class="contact-area">
                    <div class="contact-area-left">
                        <div class="name-section">
                            <label for="name">Your Name</label><br>
                            <input type="text" placeholder="Enter your name here"  name="name" id="name-input">
                        </div>
                        <div class="mail-section">
                            <label for="mail">Mail</label><br>
                            <input type="email" placeholder="example@xyz.com" name="mail" id="email-input">
                        </div>
                        <div class="phone-section">
                            <label for="phone">Phone</label><br>
                            <input type="tel" placeholder="1234567890" pattern="[0-9]{10}" name="phone" id="phone-input">
                        </div>
                    </div>
                    <div class=" contact-area-right ">
                        <label for="message ">Message</label>
                        <textarea name="user-message" id="user-message " placeholder="Your message here . . "></textarea>
                        <div class="buttons">
                            <button type="submit" id="submit" name="submit">Submit</button>
                            <button type="reset" id="reset" name="reset">Reset</button>
                        </div>
                    </div>
                </div>
                <div class="call-to-action ">
                </div>
            </form>
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
