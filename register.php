<?php
include 'helper/not_authenticated.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Utang 101</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-5">
      <div class="text-center">
        <p class="display-5 fw-bold">Create your account!</p>
        <p class="fw-bold">fill out the form!</p>
      </div>
      <div class="card p-4 shadow-lg">
        <?php if (isset($_SESSION['errors'])): ?>
          <div class="alert alert-danger">
            <?php
            echo $_SESSION['errors'];
            unset($_SESSION['errors']);
            ?>
          </div>
        <?php endif; ?>
        <form class="form" action="handler/register_handler.php" method="POST">
          <div class="mb-3">
            <label class="form-label"><i class="fa-solid fa-user"></i>&nbspUsername</label>
            <input type="text" class="form-control" name="username" required />
          </div>
          <div class="mb-3">
            <label class="form-label"><i class="fa-solid fa-key"></i>&nbspPassword</label>
            <input type="password" class="form-control" name="password" required />
          </div>
          <div class="mb-3">
            <label class="form-label"><i class="fa-solid fa-check-double"></i>&nbspConfirm Password</label>
            <input type="password" class="form-control" name="confirm_password" required />
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-registered"></i>&nbspRegister</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>