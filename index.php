<?php
require_once 'includes/header.php';
require_once 'includes/connect.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($connect, $sql);
?>

<div class="container py-5">
  <h2 class="text-center mb-4">🛒 All Products</h2>
  <div class="row">

    <?php
    if ($result && mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "
          <div class='col-md-4 mb-4'>
            <div class='card h-100 shadow'>
              <img src='/OnlineShop/assets/images/{$row['image']}' class='card-img-top' alt='{$row['name']}' style='height: 200px; object-fit: contain; background-color: #f8f9fa;'>
              <div class='card-body text-center'>
                <h5 class='card-title'>{$row['name']}</h5>
                <p class='card-text text-muted'>$ {$row['price']}</p>

                <form method='post' action='php/add_to_cart.php'>
                  <input type='hidden' name='name' value='{$row['name']}'>
                  <input type='hidden' name='price' value='{$row['price']}'>
                  <input type='hidden' name='quantity' value='1'>
                  <button type='submit' class='btn btn-success w-100'>+ Add to Cart</button>
                </form>

              </div>
            </div>
          </div>
        ";
      }
    } else {
      echo "<p class='text-center text-muted'>No products available.</p>";
    }
    ?>

  </div>
</div>

<?php require_once 'includes/footer.php'; ?>
