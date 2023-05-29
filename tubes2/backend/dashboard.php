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
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#edit-profile">Edit Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.php">Log Out</a>
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
                <img src="../img/default.png" alt="">
                <h5 class="card-title" style="padding-top: 1em;">Muhammad Fauzan Febrian Nugraha</h5>
                <p class="card-text">User/Admin</p>
                <p class="card-text">fauzan.223040027@mail.unpas.ac.id</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- edit profile -->
    <section id="edit-profile">
      <div class="container">
        <div class="col text-center" style="padding-top: 6em; text-decoration: underline;">
          <h2><b>Edit Profile</b></h2>
        </div>
        <div class="row justify-content-center" style="padding-top: 2em; padding-bottom: 8em;">
          <div class="col-md-6 text-center">
            <div class="card">
              <div class="card-body">
                <img src="../img/default.png" alt="" style="padding-bottom: 2em;">
                <div class="card-body">
                  <input type="file" class="form-control" id="profile-image-input">
                </div>
                <div class="mb-3 row">
                  <label for="staticEmail" class="col-sm-2 col-form-label" style="color: black;">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" value="email@example.com">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label" style="color: black;">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                  </div>
                </div>
                <a href="etalase/etalase.bandung.php" class="btn btn-secondary">Update</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="default-profile.jpg" class="card-img-top" alt="Default Profile">
            <div class="card-body">
              <h5 class="card-title">Foto Profil</h5>
              <input type="file" class="form-control" id="profile-image-input">
              <button class="btn btn-primary mt-2" id="update-profile-btn">Update Foto</button>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- footer -->
    <footer class="bg-dark p-2 text-center">
      <div class="container">
        <p class="text-white">Pemerintah Bandung. 2023</p>
      </div>
    </footer>

    <script src="../js/bootstrap/bootstrap.min.js"></script>
  </body>
</html>
