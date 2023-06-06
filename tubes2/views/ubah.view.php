<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Bandung | Edit</title>
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
                    <a class="nav-link" href="admin/dashboard.admin.php">Dashboard</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>
    

    <!-- edit profile -->
    <section id="edit-profile" style="padding-bottom: 10em;">
      <div class="container">
        <div class="col text-center" style="padding-top: 6em; text-decoration: underline;">
          <h2><b>Edit Profile</b></h2>
        </div>
        <div class="container mt-3">
            <h1>Edit Akun Admin</h1>

            <div class="row">
                <div class="col-md-8">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $admin['id'];  ?>">
                    <div class="mb-3">
                      <label for="username" class="form-label text-dark">Username</label>
                      <input type="text" class="form-control" name="username" id="username" value="<?= $admin['username'];  ?>">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label text-dark">Email</label>
                      <input type="text" class="form-control" name="email" id="email" value="<?= $admin['email'];  ?>">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label text-dark">Password</label>
                      <input type="password" class="form-control" name="password" id="password" value="<?= $admin['password'];  ?>">
                    </div>
                    <div class="mb-3">
                      <label for="gambar" class="form-label text-dark">Gambar</label>
                      <input type="file" class="form-control" name="gambar" id="gambar" value="<?= $admin['gambar'];  ?>">
                    </div>
                    <button class="btn btn-primary" type="submit" name="ubah">Ubah Data</button>
                </form>
                </div>
            </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="bg-dark p-2 text-center">
      <div class="container">
        <p class="text-white" style="padding-top: 1em;">Pemerintah Bandung. 2023</p>
      </div>
    </footer>

    <script src="js/bootstrap/bootstrap.min.js"></script>
  </body>
</html>