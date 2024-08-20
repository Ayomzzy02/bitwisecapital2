<?php
session_start(); // Start the session

// Check if the user is authenticated
if (!isset($_SESSION['authToken'])) {
    // If not authenticated, redirect to the login page
    header("Location: /cryptofront/logout.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Best Binary Broker, Binary investment!" />
    <title>Withdraw Bitcoin</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #1c1c1c;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #2a2a2a;
            border-radius: 8px;
            padding: 20px;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .qr-code {
            margin: 20px 0;
        }

        label {
            font-weight: 600;
            display: block;
            margin: 20px 0 5px;
            font-size: 16px;
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #444;
            background-color: #333;
            color: #fff;
            font-size: 14px;
        }

        .copy-button {
            display: inline-block;
            background-color: #ff6f61;
            color: #fff;
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: 600;
            font-size: 14px;
        }

        .copy-button:hover {
            background-color: #ff3b2f;
        }

        .tooltip {
            position: relative;
            display: inline-block;
            margin-top: 10px;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 220px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -110px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        p {
            font-size: 14px;
            margin-top: 20px;
            line-height: 1.5;
            color: #b5b5b5;
        }

        a {
            color: #ff6f61;
            text-decoration: none;
            font-weight: 600;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>PAYMENT</h1>
        <p>Scan the QR code or copy the address below into your wallet.</p>

        <div class="qr-code">
            <!-- Placeholder for QR Code -->
            <img src="qr-code-placeholder.png" alt="QR Code" width="200">
        </div>

        <label for="btc-address">BTC Address</label>
        <input type="text" id="btc-address" value="bc1qz286av2qvkxmav25t6ncxw0deramkz797l0at3" readonly>

        <div class="tooltip">
            <button class="copy-button" onclick="copyToClipboard('btc-address')">COPY</button>
            <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
        </div>

        <label for="eth-address">ETH Address</label>
        <input type="text" id="eth-address" value="0xDe33fEE478fC3Aec535B606155354eCC9392bD55" readonly>

        <div class="tooltip">
            <button class="copy-button" onclick="copyToClipboard('eth-address')">COPY</button>
            <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
        </div>

        <label for="Usdt">Usdt (TRC20)</label>
        <input type="text" id="Usdt" value="TMvzY4zojiH9s1k6TwBqQF13AXtVFFDNep" readonly>

        <div class="tooltip">
            <button class="copy-button" onclick="copyToClipboard('Usdt')">COPY</button>
            <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
        </div>

        <p>Your trading account will be credited once your payment is fully confirmed.</p>
        <p>In case of any issues, please <a href="support-page-link">contact support</a>.</p>
    </div>

    <script>
        function copyToClipboard(elementId) {
            var copyText = document.getElementById(elementId);
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");

            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copied!";
            setTimeout(function() {
                tooltip.innerHTML = "Copy to clipboard";
            }, 2000);
        }
    </script>
</body>

</html>