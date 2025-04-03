<?php
require_once '../includes/header.php';
require_once '../includes/connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $query = "SELECT * FROM client_info WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connect, $query);

    echo "<div class='container py-5 text-center'>";

    if (mysqli_num_rows($result) == 1) {
        // login success
        $_SESSION['email'] = $email;

        echo "<h2 class='text-success mb-3'>✅ Login successful!</h2>";
        echo "<a href='products.php' class='btn btn-success'>Go to Shop</a>";
    } else {
        // login fail
        echo "<h2 class='text-danger mb-3'>❌ Invalid email or password</h2>";
        echo "<a href='login.php' class='btn btn-outline-primary'>Try Again</a>";
    }

    echo "</div>";
}

require_once '../includes/footer.php';
?>