<?php
$config = require '../config/config.php';
require '../src/controllers/PaymentController.php';

$controller = new PaymentController($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->processPayment($_POST);
    header('Location: success.php');
    exit;
}
?>
