<?php include 'header.php'; ?>
<div class="container">
    <form action="process_payment.php" method="POST">
        <div class="form-group">
            <label for="card_number">Card Number</label>
            <input type="text" id="card_number" name="card_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Pay Now</button>
    </form>
</div>
<?php include 'footer.php'; ?>
