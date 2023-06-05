<?php
require_once 'config/config.php';
if (isset($_POST["login"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      $_SESSION["login"] = true;
      $_SESSION["user"] = $row["id_user"];
      if ($row["roles"] == "ADMIN") {
        header("Location: admin");
      }
    }
  }

  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="shortcut icon" href="favicon_mast.png">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    
    <link rel="stylesheet" type="text/css" href="login2.css" />
    <script
      src="https://kit.fontawesome.com/7e039003e6.js"
      crossorigin="anonymous"
    ></script>

  </head>
  <body>
    <div class="container-sm" style="max-width: 30%; margin-top: 9%; text-align: center;" >
      <h2 class="text-center">Login</h2>
      <br />
      <form method="POST" action="">
        <?php if (isset($error)) : ?>
                <div class="alert alert-danger w-75">
                  <p class="font-weight-bold m-0">Maaf, Email / Username salah</p>
                </div>
              <?php endif; ?>
              <?php if (isset($_SESSION['login_success'])) : ?>
                <div class="alert alert-success w-75">
                  <p class="font-weight-bold m-0"><?= $_SESSION['login_success']; ?></p>
                </div>
                <?php unset($_SESSION["login_success"]) ?>
              <?php endif; ?>
        <div class="form-group">
          <label for="email" class="form-label">Email</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-user"></i>
              </div>
            </div>
            <input
              type="email"
              class="form-control"
              name="email"
              id="email"
            />
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-unlock"></i>
              </div>
            </div>
            <input
              type="password"
              class="form-control"
              name="password"
              id="password"
            />
          </div>
        </div>
        <br /><br />
        <button type="submit" class="btn btn-primary" name="login">
          Submit
        </button>
        <button type="reset" class="btn btn-warning">Reset</button>
      </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
