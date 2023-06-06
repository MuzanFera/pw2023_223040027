<?php 
require 'function.php';
if(!empty($_SESSION["id"])) {
  header("location: admin/index.admin.php");
}
if(isset($_POST["submit"])) {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_logreg WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0) {
    echo "<script> alert('Username atau Email Sudah Digunakan'); </script>";
  }

  else {
    if($password == $confirmpassword) {
      $query = "INSERT INTO tb_logreg (username, email, password, gambar)
      VALUES('$username','$email','$password','gambar')";
      mysqli_query($conn,$query);
      echo "<script> alert('Registrasi Berhasil!'); </script>";
    }

    else {
      echo "<script> alert('Password Tidak Sama!'); </script>";
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Bandung | SignUp</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="container main">
        <div
          class="row"
          style="
            width: 900px;
            height: 550px;
            border-radius: 10px;
            background: #000000e7;
            box-shadow: 5px 5px 10px 1px rgba(0, 0, 0, 0.2);
          "
        >
          <div class="col-md-6 side-image">
            <!-- image -->
            <img class="img-logres" src="" alt="" />
            <div class="text">
              <p></p>
            </div>
          </div>
          <div class="col-md-6 right">
            <div class="input-box">
              <header>Create account</header>
              <form action="" method="post" autocomplete="off">
                <div class="input-field">
                  <input
                    type="text"
                    class="input"
                    name="username"
                    id="username"
                    autocomplete="off"
                    required value="" />
                  <label for="email">Username</label>
                </div>
                <div class="input-field">
                  <input
                    type="text"
                    class="input"
                    name="email"
                    id="email"
                    autocomplete="off"
                    required value="" />
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input
                    type="password"
                    class="input"
                    name="password"
                    id="password"
                    autocomplete="off"
                    required value="" />
                  <label for="password">Password</label>
                </div>
                <div class="input-field">
                  <input
                    type="password"
                    class="input"
                    name="confirmpassword"
                    id="confirmpassword"
                    autocomplete="off"
                    required value="" />
                  <label for="password">Confirm Password</label>
                </div>
                <div class="input-field">
                  <input type="submit" class="submit" name="submit" value="Register" />
                </div>
              </form>
              <div class="signin">
                <span>Sudah memiliki akun? <a href="login.php">Login</a></span>
              </div>
              <div class="signin">
                <span><a href="index.php">Masuk Sebagai User</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/bootstrap/bootstrap.min.js"></script>
  </body>
</html>
