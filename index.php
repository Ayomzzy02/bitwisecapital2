<?php
require './router/Router.php';
require './controllers/HomeController.php';
require './controllers/AuthController.php';
require './controllers/dashboardController.php';

$router = new Router();

// Define routes
$router->add('/cryptofront', [new HomeController(), 'index']);
$router->add('/cryptofront/login', [new LoginController(), 'index']);
$router->add('/cryptofront/Signup', [new SignupController(), 'index']);
$router->add('/cryptofront/verifyEmail/:emailVerificationToken', [new verifyEmail(), 'index']);
$router->add('/cryptofront/dashboard', [new dashboardController(), 'index']);
$router->add('/cryptofront/dashboard/deposit', [new dashboardController(), 'deposit']);
$router->add('/cryptofront/dashboard/withdraw', [new dashboardController(), 'withdraw']);



// Dispatch the request
$router->dispatch();

?>