<?php
require_once '../includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // do the +1 
    $check = mysqli_query($connect, "SELECT * FROM cart WHERE name = '$name'");
    if (mysqli_num_rows($check) > 0) {
        mysqli_query($connect, "UPDATE cart SET quantity = quantity + 1 WHERE name = '$name'");
    } else {
        mysqli_query($connect, "INSERT INTO cart (name, price, quantity) VALUES ('$name', $price, $quantity)");
    }

    header("Location: cart.php");
    exit();
}
?>