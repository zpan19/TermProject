<?php
require_once '../includes/header.php';
require_once '../includes/connect.php';

$query = mysqli_real_escape_string($connect, $_GET['query'] ?? '');

echo "<div class='container py-5'>";
echo "<h2 class='mb-4'>🔍 Results for '<em>" . htmlspecialchars($query) . "</em>'</h2>";

if ($query) {
    $sql = "SELECT * FROM products WHERE name LIKE '%$query%'";
    $result = mysqli_query($connect, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<div class='row'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
                <div class='col-md-4 mb-4'>
                    <div class='card h-100 shadow'>
                        <img src='/OnlineShop/assets/images/{$row['image']}' class='card-img-top' 
                             alt='{$row['name']}' style='height:200px; object-fit:contain; background:#f8f9fa;'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>{$row['name']}</h5>
                            <p class='card-text text-muted'>$ {$row['price']}</p>
                            <form method='post' action='add_to_cart.php'>
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
        echo "</div>";
    } else {
        echo "<p class='text-center text-muted'>No products found for '<strong>" . htmlspecialchars($query) . "</strong>'.</p>";
    }
} else {
    echo "<p class='text-center text-warning'>Please enter a search term.</p>";
}

echo "</div>";
require_once '../includes/footer.php';
?>
