<?php

class dashboardController {
    public function index() {
        include '././views/dashboard.php';
    }

    public function deposit() {
        include '././views/deposit.php';
    }

    public function withdraw() {
        include '././views/withdraw.php';
    }

}
?>