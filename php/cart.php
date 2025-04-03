<?php
require_once '../includes/header.php';
require_once '../includes/connect.php';

$result = mysqli_query($connect, "SELECT * FROM cart");

echo "<div class='container py-5'>";
echo "<h2 class='mb-4'>🛒 Your Cart</h2>";

if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-bordered text-center'>";
    echo "<thead class='table-dark'>
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
          </thead><tbody>";

    $grandTotal = 0;

    while ($row = mysqli_fetch_assoc($result)) {
        $originalTotal = $row['price'] * $row['quantity'];

        if (isset($_SESSION['email'])) {
            // 登录用户享受 8 折
            $discountedTotal = $originalTotal * 0.8;
            $grandTotal += $discountedTotal;
            $isDiscounted = true;
        } else {
            $discountedTotal = $originalTotal;
            $grandTotal += $originalTotal;
            $isDiscounted = false;
        }

        echo "<tr>
                <td>{$row['name']}</td>
                <td>$ " . number_format($row['price'], 2) . "</td>
                <td>
                  <button class='btn btn-sm btn-outline-secondary quantity-btn' data-name='{$row['name']}' data-action='decrease'>-</button>
                  <span class='mx-2 quantity-value'>{$row['quantity']}</span>
                  <button class='btn btn-sm btn-outline-secondary quantity-btn' data-name='{$row['name']}' data-action='increase'>+</button>
                </td>
                <td>";

        if ($isDiscounted) {
            echo "<span class='text-decoration-line-through text-muted'>$" . number_format($originalTotal, 2) . "</span><br>";
            echo "<span class='text-success fw-bold'>$" . number_format($discountedTotal, 2) . "</span>";
        } else {
            echo "$" . number_format($originalTotal, 2);
        }

        echo "</td></tr>";
    }

    echo "</tbody></table>";
    echo "<h4 class='text-end'>Grand Total: <strong>$ " . number_format($grandTotal, 2) . "</strong></h4>";
} else {
    echo "<p>Your cart is empty.</p>";
}

echo "</div>";

require_once '../includes/footer.php';
?>
