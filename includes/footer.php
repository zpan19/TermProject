<?php
require_once __DIR__ . '/connect.php';

$grandTotal = 0;
$result = mysqli_query($connect, "SELECT price, quantity FROM cart");

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $lineTotal = $row['price'] * $row['quantity'];
        $grandTotal += $lineTotal;
    }
}

if (isset($_SESSION['email'])) {
    $grandTotal *= 0.8;
    
}
?>

<footer>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-8">
        <a href="/OnlineShop/php/cart.php" class="btn btn-info w-100">View Cart</a>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-8 d-flex">
          <span class="bg-success text-white p-2 flex-fill text-center rounded-start">Shopping Cart</span>
          <button class="btn btn-danger flex-fill rounded-0 rounded-end"
        onclick="alert('Members have a 20% off discount, Your grand total is: $<?= number_format($grandTotal, 2) ?> after discount')">
     Proceed to Checkout
        </button>
        </div>
      </div>
    </div>
  </div>

  <div style="background-color: #333; color: white; padding: 15px; text-align: center;">
    <p>&copy; 2025 Computer Shop. All rights reserved.</p>
  </div>
</footer>