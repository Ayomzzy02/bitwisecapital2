<?php
session_start(); // Start the session

// Check if the user is authenticated
if (!isset($_SESSION['authToken'])) {
    // If not authenticated, redirect to the login page
    header("Location: /cryptofront/logout.php");
    exit();
}
?>

<?xml version="1.0" encoding="utf-8"?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head><meta name="description" content="Best Binary Broker, Binary investment!"/>



 





<script src="//code.tidio.co/orhlily9amcravkhyiyegstaycqmbie9.js" async></script>


</div></span></dv> </div></div>    <title>BITWISE CAPITAL | Dashboard</title>
    <!-- Meta Tags -->





<!DOCTYPE html>
<html lang="en">

<head>
  
<body>


 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/cryptofront/dashboard"><b>BITWISE CAPITAL</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">  <font 
          
          color="white">
              Balance: $0        </font></a>
           </li>
           
            <li class="nav-item">
            <a class="nav-link" href="#">  <font 
          
          color="white">
              Invested Amount: $0        </font></a>
           </li>
        <li class="nav-item">
          <a class="nav-link" href="/cryptofront/dashboard/deposit">Deposit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cryptofront/dashboard/withdraw">Withdraw</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cryptofront/logout.php">Logout</a>
        </li>    
      </ul>
    </div>
  </div>
</nav>


<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR to USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
  ],
  "showSymbolLogo": false,
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->


<div class="container-fluid mt-3">
                   
                       </br>
	<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_0087f"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BITSTAMP-BTCUSD/" rel="noopener" target="_blank"><span class="blue-text"></span></a> </div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "100%",
  "height": 610,
  "symbol": "BITSTAMP:BTCUSD",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_0087f"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->




</div>

</br>

<style>
.footer {
   
   left: 0;
   bottom: 0;
   width: 100%;
   height:70px;
   background-color: black;
   color: white;
   text-align: center;
}
</style>
</head>
<body>



<div class="footer">
    </br>
   <p>© 2024 BITWISE CAPITAL . All Rights Reserved </p>
</div>

</body>
</html>