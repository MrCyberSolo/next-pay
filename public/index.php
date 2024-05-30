<?php
$config = require '../config/config.php';
require '../src/controllers/PaymentController.php';

$controller = new PaymentController($config);
include '../src/views/payment_form.php';
?>
