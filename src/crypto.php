<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
    <script src="../js/crypto.js"></script>
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

                <a href="../src/crypto.php" class="nav-items" style="background-color: rgb(233, 233, 233);">
                    <img src=" ../Media/nav-item-icons/cryptocurrency.svg" class="nav-item-icon ">
                    <p>Crypto</p>
                </a>

                <a href="../src/indian-banks.php " class="nav-items ">
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
            <div class="crypto-cards-section">
                <h3 class="trending-text">Popular cryptocoins</h3>
                <div class="crypto-cards-grid">
                    <div id="bitcoin-card">
                        <a href="" class="crypto-card-upper">
                            <img src="../Media/crypto/bitcoin.png" alt="bitcoin" class="crypto-icon">
                            <h4 class="crypto-name-card">BITCOIN</h4>
                            <p class="crypto-short">BTC</p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price"> INR 1,000</p>
                            <p class="card-price-change"> INR 10</p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="ethereum-card">
                        <a href="" class="crypto-card-upper">
                            <img src="../Media/crypto/ethereum.png" alt="ethereum" class="crypto-icon">
                            <h4 class="crypto-name-card">ETHERUM</h4>
                            <p class="crypto-short">ETH</p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price"> INR 1,000</p>
                            <p class="card-price-change"> INR 10</p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="bitcoin-cash-card">
                        <a href="" class="crypto-card-upper">
                            <img src="../Media/crypto/bitcoin-cash.png" alt="bitcoin cash" class="crypto-icon">
                            <h4 class="crypto-name-card">BITCOIN CASH</h4>
                            <p class="crypto-short">BCH</p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price"> INR 1,000</p>
                            <p class="card-price-change"> INR 10</p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="litecoin-card">
                        <a href="" class="crypto-card-upper">
                            <img src="../Media/crypto/litecoin.png" alt="litecoin" class="crypto-icon">
                            <h4 class="crypto-name-card">LITECOIN</h4>
                            <p class="crypto-short">LTC</p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price"> INR 1,000</p>
                            <p class="card-price-change"> INR 10</p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="cardano-card">
                        <a href="" class="crypto-card-upper">
                            <img src="../Media/crypto/cardano.png" alt="bitcoin" class="crypto-icon">
                            <h4 class="crypto-name-card">CARDANO</h4>
                            <p class="crypto-short">ADA</p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price"> INR 1,000</p>
                            <p class="card-price-change"> INR 10</p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="dogecoin-card">
                        <a href="" class="crypto-card-upper">
                            <img src="../Media/crypto/dogecoin.png" alt="ethereum" class="crypto-icon">
                            <h4 class="crypto-name-card">DOGECOIN</h4>
                            <p class="crypto-short">DOGE</p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price"> INR 1,000</p>
                            <p class="card-price-change"> INR 10</p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="eos-card">
                        <a href="" class="crypto-card-upper">
                            <img src="../Media/crypto/eos.png" alt="bitcoin cash" class="crypto-icon">
                            <h4 class="crypto-name-card">EOS</h4>
                            <p class="crypto-short">EOS</p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price"> INR 1,000</p>
                            <p class="card-price-change"> INR 10</p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                    <div id="stellar-card">
                        <a href="" class="crypto-card-upper">
                            <img src="../Media/crypto/stellar.png" alt="litecoin" class="crypto-icon">
                            <h4 class="crypto-name-card">STELLAR</h4>
                            <p class="crypto-short">XLM</p>
                        </a>
                        <div class="crypto-card-bottom">
                            <p class="card-price"> INR 1,000</p>
                            <p class="card-price-change"> INR 10</p>
                        </div>
                        <a href="https://www.binance.com/en/buy-sell-crypto" class="buy-btn" target="_blank">BUY</a>
                    </div>
                </div>
                <!-- Graph section -->
                <div class="graph-section">
                    <h3>Recent percentage change in crypto prices.</h3>
                    <canvas id="crypto-chart"></canvas>
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