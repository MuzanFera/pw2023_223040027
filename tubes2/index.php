<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Bandung</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/nav-logo.png" alt="" style="height: 40px" />
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
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-bandung">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#etalase">Etalase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="backend/dashboard.php">Dashboard</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>

    <!-- jumbotron -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/jum-pic-1.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="img/jum-pic-2.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="img/jum-pic-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <!-- about -->
    <section id="about-bandung">
        <div class="container">
            <div class="about-bandung" style="text-align: center; padding-top: 5em; padding-bottom: 1em; text-decoration: underline;">
                <h2><b>Bandung?</b></h2>
            </div>
            <div class="card">
                <img src="img/mawbrouwer.jpg" class="card-img-top" alt="mawbrouwe">
                    <div class="card-body text-center">
                        <p class="card-text">"Bumi Pasundan lahir ketika Tuhan sedang tersenyum"</p>
                        <p class="card-text"><small class="text-body-secondary">M.A.W.Brouwer</small></p>
                    </div>
                </div>
                <img src="img/pidibaiq.jpg" class="card-img-top" alt="pidibaiq">
                    <div class="card-body text-center">
                        <p class="card-text">"Dan Bandung bagiku bukan cuma masalah geografis, lebih jauh dari itu melibatkan perasaan, yang bersamaku ketika sunyi"</p>
                        <p class="card-text"><small class="text-body-secondary">Pidi Baiq</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- etalase -->
    <section id="etalase">
      <div class="container">
        <div class="row text-center mb-3 mt-5" style="padding-top: 5em; text-decoration: underline;">
          <div class="col">
            <h2><b>Etalase</b></h2>
          </div>
        </div>
        <form class="d-flex" role="search" style="padding-bottom: 2em;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/asiaafrikabandung.jpg" class="card-img-top" alt="project1" />
              <div class="card-body">
                <h5 class="card-title">Asia Afrika</h5>
                <p class="card-text">Asia Afrika adalah sebuah jalan utama yang terletak di pusat Kota Bandung, Jawa Barat, Indonesia.</p>
                <a href="etalase/etalase.asiaafrika.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/map-bandung.png" class="card-img-top" alt="project2" />
              <div class="card-body">
                <h5 class="card-title">Bandung</h5>
                <p class="card-text">Bandung adalah ibu kota provinsi Jawa Barat, Indonesia, dan merupakan salah satu kota terbesar di Indonesia.</p>
                <a href="etalase/etalase.bandung.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/tugu-cibaduyut.jpg" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Cibaduyut</h5>
                <p class="card-text">Cibaduyut adalah sebuah wilayah yang terletak di Kota Bandung, Jawa Barat, Indonesia.</p>
                <a href="etalase/etalase.cibaduyut.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="bg-dark p-2 text-center">
      <div class="container">
        <p class="text-white">Pemerintah Bandung. 2023</p>
      </div>
    </footer>

    <script src="js/bootstrap/bootstrap.min.js"></script>
  </body>
</html>
