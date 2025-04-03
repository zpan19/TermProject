<?php
require_once '../includes/header.php';
require_once '../includes/connect.php'; // 你的数据库连接文件

$category = $_GET['category'] ?? 'all';

echo "<div class='container py-4'>";
echo "<h2 class='text-center mb-4'>" . ucfirst($category) . " Products</h2>";

// 查询数据库
$sql = ($category === 'all') 
    ? "SELECT * FROM products"
    : "SELECT * FROM products WHERE category = '$category'";

$result = mysqli_query($connect, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<div class='row'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <div class='col-md-4 mb-4'>
            <div class='card h-100 shadow'>
                <img src='/OnlineShop/assets/images/{$row['image']}' class='card-img-top' alt='{$row['name']}' style='height: 200px; object-fit: contain; background-color: #f8f9fa;'>
                <div class='card-body d-flex flex-column justify-content-between'>
                    <h5 class='card-title'>{$row['name']}</h5>
                    <p class='card-text text-muted'>$ {$row['price']}</p>
                    
<button class='btn btn-success w-100 add-to-cart' 
        data-name='{$row['name']}' 
        data-price='{$row['price']}' 
        data-quantity='1'>
  + Add to Cart
</button>
                </div>
            </div>
        </div>
        ";
    }
    echo "</div>";
} else {
    echo "<p class='text-center text-muted'>No products found for this category.</p>";
}

echo "</div>";

require_once '../includes/footer.php';
?>