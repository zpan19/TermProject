





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Computer Shop</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/OnlineShop/js/cart.js"></script>
  <script src="/OnlineShop/js/update.js"></script>
  
  <link rel="stylesheet" href="/OnlineShop/css/style.css">
  <link rel="stylesheet" href="/OnlineShop/css/bootstrap.css">

 
  <script src="/OnlineShop/js/bootstrap.bundle.min.js"></script>


  <script src="/OnlineShop/js/cart.js"></script>
  <script src="/OnlineShop/js/update.js"></script>
  <script src="/OnlineShop/js/script.js"></script>
  <script src="/OnlineShop/js/darkmodetoggle.js"></script>
  
</head>




<?php
session_start();
?>

<!-- check logged in  -->
<div class="container d-flex justify-content-end mt-2">
<?php
if (isset($_SESSION['email'])) {
  echo "<span class='text-muted'>👋 Logged in as {$_SESSION['email']}</span>";
  echo "<a href='/OnlineShop/php/logout.php' class='btn btn-outline-danger btn-sm' style='margin-left: 3rem;'>Logout</a>";
}
?>






</div>








<header class="mb-5">
  <div class="container mt-4">
    
    <!-- Dark/Light toggle -->
    <div class="d-flex justify-content-end mb-3">
      <div class="btn-group me-2">
        <button class="btn btn-secondary btn-sm" data-bs-theme-value="dark">Dark</button>
      </div>
      <div class="btn-group">
        <button class="btn btn-light btn-sm" data-bs-theme-value="light">Light</button>
      </div>
    </div>

    <!-- Shop title -->
    <h1 class="mb-3">Computer Shop</h1>

    <!-- Search & Navigation -->
    <div class="row align-items-center">
      <!-- Search -->
      <div class="col-md-4">
  <form class="d-flex" method="GET" action="/OnlineShop/php/search.php">
    <input type="text" name="query" class="form-control form-control-lg me-2" placeholder="Search Part" required>
    <button class="btn btn-outline-primary" type="submit">Search</button>
  </form>
</div>

      <!-- Navigation -->
      <div class="col-md-8 d-flex justify-content-end">
        <ul class="nav">
          <!-- Products dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown">
              Products
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=cpu">CPU</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=videocard">Video Card</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=motherboard">Motherboard</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=storage">Storage</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=case">Case</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=thermal">Thermal</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=monitor">Monitor</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=keyboard">Keyboard</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=mouse">Mouse</a></li>
            </ul>
          </li>

          <!-- Other nav links -->
          <li class="nav-item">
            <a class="nav-link text-primary" href="/OnlineShop/php/register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="/OnlineShop/php/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="/OnlineShop/php/cart.php">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="/OnlineShop/index.php">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>

