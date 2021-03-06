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
    <link rel="icon" href="../Media/logo.svg">
    <script src="../js/stocks.js" defer></script>
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

                <a href="./stocks.php" class="nav-items" style="background-color: rgb(233, 233, 233);">
                    <img src="../Media/nav-item-icons/stocks.svg" class="nav-item-icon">
                    <p>Stocks</p>
                </a>

                <a href="./crypto.php" class="nav-items">
                    <img src="../Media/nav-item-icons/cryptocurrency.svg" class="nav-item-icon">
                    <p>Crypto</p>
                </a>

                <a href="./indian-banks.php" class="nav-items">
                    <img src="../Media/nav-item-icons/bank-building.svg" class="nav-item-icon">
                    <p>Indian Banks</p>
                </a>

                <a href="./help.php" class="nav-items">
                    <img src="../Media/nav-item-icons/technical-support.svg" class="nav-item-icon">
                    <p>Help and support</p>
                </a>

                <a href="./contact-us.php" class="nav-items">
                    <img src="../Media/nav-item-icons/contact.svg" class="nav-item-icon">
                    <p>Contact Us</p>
                </a>
            </div>

            <!-- ENTER YOUR HTML HERE DYNAMICALLY-->
            <div class="stocks-cards-section">
                <h3 class="trending-text">Popular Stocks Today</h3>
                <div class="stocks-cards-grid">
                    <div id="stock1-card">
                        <a href="" class="crypto-card-upper">
                            <!-- <img src="../Media/crypto/bitcoin.png" alt="bitcoin" class="crypto-icon"> -->
                            <h4 class="stock-name-card"></h4>
                            <p class="stock-short"></p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price" id="stock-price"></p>
                            <p class="card-price-change" id="stock-price-change"></p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="stock2-card">
                        <a href="" class="crypto-card-upper">
                            <!-- <img src="../Media/crypto/ethereum.png" alt="ethereum" class="crypto-icon"> -->
                            <h4 class="stock-name-card"></h4>
                            <p class="stock-short"></p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price" id="stock-price"></p>
                            <p class="card-price-change" id="stock-price-change"></p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="stock3-card">
                        <a href="" class="crypto-card-upper">
                            <!-- <img src="../Media/crypto/bitcoin-cash.png" alt="bitcoin cash" class="crypto-icon"> -->
                            <h4 class="stock-name-card"></h4>
                            <p class="stock-short"></p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price" id="stock-price"></p>
                            <p class="card-price-change" id="stock-price-change"></p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="stock4-card">
                        <a href="" class="crypto-card-upper">
                            <!-- <img src="../Media/crypto/litecoin.png" alt="litecoin" class="crypto-icon"> -->
                            <h4 class="stock-name-card"></h4>
                            <p class="stock-short"></p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price" id="stock-price"></p>
                            <p class="card-price-change" id="stock-price-change"></p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="stock5-card">
                        <a href="" class="crypto-card-upper">
                            <!-- <img src="../Media/crypto/cardano.png" alt="bitcoin" class="crypto-icon"> -->
                            <h4 class="stock-name-card"></h4>
                            <p class="stock-short"></p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price" id="stock-price"></p>
                            <p class="card-price-change" id="stock-price-change"></p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="stock6-card">
                        <a href="" class="crypto-card-upper">
                            <!-- <img src="../Media/stock.html" alt="ethereum" class="crypto-icon"> -->
                            <h4 class="stock-name-card"></h4>
                            <p class="stock-short"></p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price" id="stock-price"></p>
                            <p class="card-price-change" id="stock-price-change"></p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="stock7-card">
                        <a href="" class="crypto-card-upper">
                            <!-- <img src="../Media/crypto/eos.png" alt="bitcoin cash" class="crypto-icon"> -->
                            <h4 class="stock-name-card"></h4>
                            <p class="stock-short"></p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price" id="stock-price"></p>
                            <p class="card-price-change" id="stock-price-change"></p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="stock8-card">
                        <a href="" class="crypto-card-upper">
                            <!-- <img src="../Media/crypto/stellar.png" alt="litecoin" class="crypto-icon"> -->
                            <h4 class="stock-name-card"></h4>
                            <p class="stock-short"></p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price" id="stock-price"></p>
                            <p class="card-price-change" id="stock-price-change"></p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-section ">
            <div class="footer-left ">
                <p>Made by : Aditya & Keshav</p>
            </div>
            <div class="footer-right ">
                <a href="https://github.com/finsource/webapp " target="_blank "><img src="../Media/github-logo.svg" class="github-logo "></a>
            </div>
        </div>
    </div>

</body>

</html>