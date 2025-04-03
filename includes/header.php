<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Computer Shop</title>

  <!-- CSS -->
  <link rel="stylesheet" href="/OnlineShop/assets/css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/OnlineShop/js/cart.js"></script>
  <script src="/OnlineShop/js/update.js"></script>
  <script src="/OnlineShop/js/darkmodetoggle.js"></script>
</head>

<body>

<div class="text-center py-3 bg-white">
  <a href="/OnlineShop/index.php">
    <img src="/OnlineShop/assets/images/onlineshop.jpg" 
         alt="Computer Shop Logo"
         style="max-height: 160px; object-fit: contain;" 
         class="img-fluid" />
  </a>
</div>
  <nav class="navbar navbar-expand-lg bg-light shadow-sm mb-4">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/OnlineShop/index.php">Computer Shop</a>

      <!-- Search -->
      <form class="d-flex me-3" action="/OnlineShop/php/search.php" method="get">
        <input class="form-control me-2" type="text" name="query" placeholder="Search Part" required>
        <button class="btn btn-primary" type="submit">Search</button>
      </form>

      <!-- Dark/Light Toggle -->
      <div class="btn-group me-3">
        <button class="btn btn-sm btn-outline-dark" data-bs-theme-value="dark">Dark</button>
        <button class="btn btn-sm btn-outline-secondary" data-bs-theme-value="light">Light</button>
      </div>

      <!-- Navbar toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navigation links -->
      <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
        <ul class="navbar-nav">
          <!-- Products Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Products</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=all">All</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=cpu">CPU</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=videocard">Video Card</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=motherboard">Motherboard</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=storage">Storage</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=case">Case</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=thermal">Thermal</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=monitor">Monitor</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=keyboard">Keyboard</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=mouse">Mouse</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=ram">RAM</a></li>
              <li><a class="dropdown-item" href="/OnlineShop/php/products.php?category=psu">Power Supply</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="/OnlineShop/php/register.php">Register</a></li>
          <li class="nav-item"><a class="nav-link" href="/OnlineShop/php/login.php">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="/OnlineShop/php/cart.php">Cart</a></li>
          <li class="nav-item"><a class="nav-link" href="/OnlineShop/php/about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="/OnlineShop/php/contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="/OnlineShop/index.php">Home</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- 登录信息 -->
  <div class="container d-flex justify-content-end mb-2">
    <?php if (isset($_SESSION['email'])): ?>
      <span class="me-2 text-muted">👋 Logged in as <?= $_SESSION['email'] ?></span>
      <a href="/OnlineShop/php/logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
    <?php endif; ?>
  </div>
