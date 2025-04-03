<?php require_once "../includes/header.php"; ?>

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="col-md-4">
    <form class="border p-4 shadow bg-white rounded" method="post" action="login_check.php">
      <h2 class="text-center mb-4">Login</h2>

      <div class="form-group mb-3">
        <label>Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>

      <div class="form-group mb-3">
        <label>Password</label>
        <input type="password" class="form-control" name="password" required>
      </div>

      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
  </div>
</div>

<?php require_once "../includes/footer.php"; ?>