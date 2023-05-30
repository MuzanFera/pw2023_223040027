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
                    <a class="nav-link" href="#about-bandung">Bandung?</a>
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
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/jum-pic-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Pemerintah</h5>
                  <p></p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/jum-pic-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Bandung</h5>
                  <p></p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/jum-pic-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Jawa Barat</h5>
                  <p></p>
                </div>
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
        <div class="row" style="background-color: rgba(0, 0, 0, 0.1); padding-top: 15px;">
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
              <img src="img/jalan-braga.jpg" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Braga</h5>
                <p class="card-text">Jalan Braga ini memiliki nuansa kolonial Belanda yang kental dan telah menjadi ikon kota Bandung. </p>
                <a href="#" class="btn btn-primary">Lebih Lengkap</a>
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

          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/jalan-dago.jpg" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Kawasan Dago</h5>
                <p class="card-text">Terletak di daerah dataran tinggi di sebelah utara kota Bandung, kawasan ini menawarkan pemandangan alam yang indah dan beragam aktivitas wisata.</p>
                <a href="#" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/gedung-sate.png" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Gedung Sate</h5>
                <p class="card-text">Gedung ini merupakan markas pemerintahan Provinsi Jawa Barat dan terletak di pusat kota Bandung, dekat dengan Gedung Merdeka dan Alun-Alun Bandung.</p>
                <a href="#" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/gedung-merdeka.png" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Gedung Merdeka</h5>
                <p class="card-text">Gedung ini memiliki nilai sejarah yang penting karena di sinilah perundingan antara pemerintah Indonesia dan pihak Belanda berlangsung pada tahun 1945 yang kemudian menghasilkan pengakuan kemerdekaan Indonesia.</p>
                <a href="#" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/alunalun-bdg.png" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Alun-Alun Bandung</h5>
                <p class="card-text">Alun-Alun ini terletak di sekitar Gedung Merdeka dan sejajar dengan Jalan Asia Afrika.</p>
                <a href="#" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/museumgeologi.png" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Museum Geologi</h5>
                <p class="card-text">Museum yang menampilkan koleksi batu, fosil, dan artefak geologi yang menarik.</p>
                <a href="#" class="btn btn-primary">Lebih Lengkap</a>
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
