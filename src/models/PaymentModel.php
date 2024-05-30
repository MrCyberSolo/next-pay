<?php
class PaymentModel {
    private $db;

    public function __construct($config) {
        $this->db = new PDO(
            'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'],
            $config['db']['user'],
            $config['db']['pass']
        );
    }

    public function saveTransaction($transaction) {
        $stmt = $this->db->prepare('INSERT INTO transactions (user_id, amount, status) VALUES (:user_id, :amount, :status)');
        $stmt->execute([
            'user_id' => $transaction['user_id'],
            'amount' => $transaction['amount'],
            'status' => $transaction['status'],
        ]);
    }

    public function getTransaction($transaction_id) {
        $stmt = $this->db->prepare('SELECT * FROM transactions WHERE id = :id');
        $stmt->execute(['id' => $transaction_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
