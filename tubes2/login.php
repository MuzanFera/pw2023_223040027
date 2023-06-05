<?php 
require 'function.php';
if(!empty($_SESSION["id"])) {
  header("location: admin/index.admin.php");
}
if(isset($_POST["submit"])) {
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_logreg WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0) {
    if($password == $row["password"]) {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: admin/index.admin.php");
    }

    else {
        echo "<script> alert('Password Salah!'); </script>";
    }
  }

  else {
    echo "<script> alert('Akun Tidak Ter-Registrasi!'); </script>";
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
    <title>Bandung | Login</title>
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
              <header>Login</header>
              <form action="" method="post" autocomplete="off">
                <div class="input-field">
                  <input
                    type="text"
                    class="input"
                    name="usernameemail"
                    id="usernameemail"
                    autocomplete="off"
                    required value="" />
                  <label for="usernameemail">Username/email</label>
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
                  <input type="submit" class="submit" name="submit" value="Register" />
                </div>
              </form>
              <div class="signin">
                <span
                  >Tidak memiliki akun?
                  <a href="register.php">Register</a></span
                >
              </div>
              <div class="signin">
                <span> <a href="index.php">Masuk Sebagai User</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/bootstrap/bootstrap.min.js"></script>
  </body>
</html>
