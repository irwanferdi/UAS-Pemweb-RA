<!DOCTYPE html>
<?php
include 'koneksi.php';
?>
<html>

<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
</head>

<body>
  <img class="wave" src="img/controller.png" />
  <div class="container">
    <div class="img">
      <img src="" />
    </div>
    <div class="login-content">
      <form method="POST" action="ceklogin.php">
        <img src="img/playgames.png" />
        <h3 class="title">WELCOME</h3>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Username</h5>
            <input class="input" type="text" name="username" required />
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Password</h5>
            <input class="input" type="password" name="password" required />
          </div>
        </div>

        <input type="submit" class="btn" value="Login" />
      </form>
    </div>
  </div>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>