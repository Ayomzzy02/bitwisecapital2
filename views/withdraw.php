<?php
session_start(); // Start the session

// Check if the user is authenticated
if (!isset($_SESSION['authToken'])) {
    // If not authenticated, redirect to the login page
    header("Location: /cryptofront/logout.php");
    exit();
}

// If authenticated, proceed with the rest of the page
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Best Binary Broker, Binary investment!">
    <title>BITWISE CAPITAL &raquo; WITHDRAWAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            margin-bottom: 40px;
        }

        .withdrawal-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .withdrawal-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .withdrawal-container p {
            margin-bottom: 10px;
            color: #666;
        }

        .form-control {
            margin-bottom: 20px;
            border-radius: 5px;
            padding: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            height: 50px;
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../"><b>BITWISE CAPITAL</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Balance: $0</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cryptofront/dashboard/deposit">Deposit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/cryptofront/dashboard/withdraw">Withdraw</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cryptofront/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="withdrawal-container">
        <h1>Make A Withdrawal Request</h1>
        <p>We recommend the use of Bitcoin, it's safe and fast.</p>
        <p><strong>Your Account Balance Is: $0</strong></p>

        <form action="#" method="POST">
            <input type="text" name="btc_address" class="form-control" placeholder="BTC Address" required>
            <input type="number" name="amount" class="form-control" placeholder="Amount" required min="1">
            <button type="submit" name="submit" class="btn btn-primary w-100">Make Withdrawal</button>
        </form>
    </div>

    <div class="footer">
        <p>© 2024 BITWISE CAPITAL. All Rights Reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
