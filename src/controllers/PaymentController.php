<?php
require_once 'src/models/PaymentModel.php';

class PaymentController {
    private $model;

    public function __construct($config) {
        $this->model = new PaymentModel($config);
    }

    public function processPayment($data) {
        // Validate data
        // ...

        // Encrypt sensitive data
        $data['card_number'] = $this->encrypt($data['card_number'], $config['security']['encryption_key']);

        // Save transaction
        $this->model->saveTransaction([
            'user_id' => $data['user_id'],
            'amount' => $data['amount'],
            'status' => 'pending',
        ]);

        // Process payment with third-party API
        // ...

        // Update transaction status
        // ...
    }

    private function encrypt($data, $key) {
        return openssl_encrypt($data, 'aes-256-cbc', $key, 0, substr($key, 0, 16));
    }
}
?>
