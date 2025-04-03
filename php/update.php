<?php
require_once '../includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $action = $_POST['action']; // "increase" or "decrease"

    $query = mysqli_query($connect, "SELECT quantity FROM cart WHERE name = '$name'");
    $row = mysqli_fetch_assoc($query);

    if ($row) {
        $quantity = $row['quantity'];

        if ($action === "increase") {
            $quantity += 1;
            mysqli_query($connect, "UPDATE cart SET quantity = $quantity WHERE name = '$name'");
        } elseif ($action === "decrease") {
            $quantity -= 1;
            if ($quantity <= 0) {
                mysqli_query($connect, "DELETE FROM cart WHERE name = '$name'");
            } else {
                mysqli_query($connect, "UPDATE cart SET quantity = $quantity WHERE name = '$name'");
            }
        }
    }
}
?>