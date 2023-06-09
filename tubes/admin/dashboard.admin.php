<?php 
require '../function.php';
if(!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_logreg WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}

else {
  header("Location: ../login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Bandung | Dashboard</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <h3><b>Dashboard</b></h3>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.admin.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#edit-profile">Edit Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Log Out</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>

    <!-- profile -->
    <section id="profile">
      <div class="container">
        <div class="col text-center" style="padding-top: 8em; text-decoration: underline;">
          <h2><b>Profile</b></h2>
        </div>
        <div class="row justify-content-center" style="padding-top: 3em;">
          <div class="col-md-4 text-center">
            <div class="card">
              <div class="card-body">
                <img src="../img/<?php echo $row["gambar"] ?>" alt="" style="width: 100%;">
                <p class="card-text">Admin</p>
                <h5 class="card-title"><b><?php echo $row["username"]; ?></b></h5>
                <p class="card-text"><?php echo $row["email"]; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- edit profile -->
    <section id="edit-profile" style="padding-bottom: 5em">
      <div class="container">
        <div class="col text-center" style="padding-top: 10em; text-decoration: underline;">
          <h2><b>Edit Profile</b></h2>
        </div>

        <form class="d-flex" role="search" style="padding-top: 2em;" action="" method="post">
          <input class="form-control me-2" type="text" name="keyword" placeholder="Masukan Keyword Pencarian.." autocomplete="">
          <button class="btn btn-outline-secondary" type="submit" name="cari">Cari</button>
        </form>

          <?php

          $admin = query("SELECT * FROM tb_logreg");

          // tombol cari ditekan
          if( isset($_POST["cari"]) ) {
            $admin = cari($_POST["keyword"]);
          }
          
          require('../views/dashboard.view.php');
          
          ?>

        </div>
    </section>

    <!-- footer -->
    <footer class="bg-dark p-2 text-center">
      <div class="container">
        <p class="text-white" style="padding-top: 1em;">Pemerintah Bandung. 2023</p>
      </div>
    </footer>

    <script src="../js/bootstrap/bootstrap.min.js"></script>
  </body>
</html>