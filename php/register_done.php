<?php
require_once '../includes/header.php';
require_once '../includes/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get data
    $email = $_POST['email'];
    $password = $_POST['password']; //  password_hash()
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postalcode = $_POST['postalcode'];

    
    $email = mysqli_real_escape_string($connect, $email);
    $password = mysqli_real_escape_string($connect, $password);
    $address = mysqli_real_escape_string($connect, $address);
    $city = mysqli_real_escape_string($connect, $city);
    $province = mysqli_real_escape_string($connect, $province);
    $postalcode = mysqli_real_escape_string($connect, $postalcode);

    
    $sql = "INSERT INTO client_info (email, password, address, city, province, postalcode)
            VALUES ('$email', '$password', '$address', '$city', '$province', '$postalcode')";

    if (mysqli_query($connect, $sql)) {
        echo "<div style='text-align:center; padding:50px;'><h2>✅ Registration successful!</h2></div>";
        
    } else {
        echo "<div style='text-align:center; padding:50px; color:red;'><h2>❌ Error: " . mysqli_error($connect) . "</h2></div>";
    }
    
}
echo "<div style='text-align:center; margin-top:20px;'>
        <a href='login.php' class='btn btn-primary'>Go to Login</a>
      </div>";


      
require_once '../includes/footer.php';
?>