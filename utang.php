<?php include 'helper/not_authenticated.php'; ?>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-5">
      <div class="text-center">
        <p class="display-5 fw-bold">Utang 101<i class="bi bi-piggy-bank"></i></p>
        <p class="fw-bold">Please enter your credentials to login!</p>
      </div>
      <div class="card p-4 shadow-lg">
        <form class="form" action="handler/login_handler.php" method="POST">
          <div class="mb-3">
            <label class="form-label"><i class="bi bi-person"></i>Username</label>
            <input type="text" class="form-control" name="username" required />
          </div>
          <div class="mb-3">
            <label class="form-label"><i class="bi bi-key"></i>Password</label>
            <input type="password" class="form-control" name="password" required />
          </div>
          <div class="mb-3 text-end">
            <a href="register.php"><i class="bi bi-cursor"></i>Don't have an account? Click here to register!</a>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-success">Login&nbsp;<i class="bi bi-box-arrow-in-right"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>