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
    <title>Bandung</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../img/nav-logo.png" alt="" style="height: 40px" />
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
                    <a class="nav-link" href="dashboard.admin.php">Dashboard</a>
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
                <img src="../img/jum-pic-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Pemerintah</h5>
                  <p></p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../img/jum-pic-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Bandung</h5>
                  <p></p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../img/jum-pic-3.jpg" class="d-block w-100" alt="...">
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
                <img src="../img/mawbrouwer.jpg" class="card-img-top" alt="mawbrouwe">
                    <div class="card-body text-center">
                        <p class="card-text">"Bumi Pasundan lahir ketika Tuhan sedang tersenyum"</p>
                        <p class="card-text"><small class="text-body-secondary">M.A.W.Brouwer</small></p>
                    </div>
                  </div>
                  <img src="../img/pidibaiq.jpg" class="card-img-top" alt="pidibaiq">
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

        <form class="d-flex" role="search" style="padding-bottom: 2em;" action="" method="post">
          <input class="form-control me-2" type="search" name="keyword" placeholder="Masukkan Pencarian..." aria-label="Search" autocomplete="off">
          <button class="btn btn-outline-secondary" type="submit" name="search">Search</button>
        </form>
        
          <div class="row" style="background-color: rgba(0, 0, 0, 0.1); padding-top: 15px;">
            
            <div class="col-md-3 mb-3">
              <div class="card">
                <img src="../img/alunalun-bdg.png" class="card-img-top" alt="project3" />
                <div class="card-body">
                  <h5 class="card-title">Alun-Alun Bandung</h5>
                  <p class="card-text">Alun-Alun Bandung adalah pusat kota yang menjadi tempat bersejarah dengan monumen dan taman yang melambangkan perjalanan sejarah kota ini.</p>
                  <a href="../etalase/etalase.alunalunbandung.php" class="btn btn-primary">Lebih Lengkap</a>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
                <img src="../img/gd-de-driekleur.jpg" class="card-img-top" alt="project3" />
                <div class="card-body">
                  <h5 class="card-title">Gedung De Driekleur</h5>
                  <p class="card-text">Bangunan ini adalah bekas markas Pemerintah Hindia Belanda di Bandung pada masa kolonial dan sekarang digunakan sebagai kantor Balaikota Bandung.</p>
                  <a href="../etalase/etalase.gddedriekleur.php" class="btn btn-primary">Lebih Lengkap</a>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
                <img src="../img/gd-krs.jpg" class="card-img-top" alt="project3" />
                <div class="card-body">
                  <h5 class="card-title">Gedung Kesenian Rumentang Siang</h5>
                  <p class="card-text">Gedung ini adalah bekas tempat pertunjukan seni tradisional Sunda, seperti wayang golek dan tari Jaipong.</p>
                  <a href="../etalase/etalase.gdkrs.php" class="btn btn-primary">Lebih Lengkap</a>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
                <img src="../img/gedung-merdeka.png" class="card-img-top" alt="project3" />
                <div class="card-body">
                  <h5 class="card-title">Gedung Merdeka</h5>
                  <p class="card-text">Gedung ini memiliki peran penting dalam sejarah Indonesia sebagai tempat berlangsungnya Konferensi Asia Afrika pada tahun 1955.</p>
                  <a href="../etalase/etalase.gdmerdeka.php" class="btn btn-primary">Lebih Lengkap</a>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
              <img src="../img/gedung-sate.jpg" class="card-img-top" alt="project1" />
              <div class="card-body">
                <h5 class="card-title">Gedung Sate</h5>
                <p class="card-text">Gedung ini adalah markas pemerintahan Provinsi Jawa Barat dan memiliki arsitektur yang unik dengan menara berbentuk tusuk sate.</p>
                <a href="../etalase/etalase.gdsate.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="../img/jl-braga.jpg" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Jalan Braga</h5>
                <p class="card-text">Jalan ini adalah jalan bersejarah yang menjadi pusat kehidupan sosial dan budaya pada masa kolonial Belanda. Di sini terdapat bangunan tua, kafe, restoran, dan toko-toko dengan nuansa retro.</p>
                <a href="../etalase/etalase.jlbraga.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="../img/masjid-raya-bandung.png" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Masjid Agung Bandung</h5>
                <p class="card-text">Masjid ini adalah salah satu masjid terbesar di Indonesia dan memiliki arsitektur yang mencerminkan perpaduan antara gaya tradisional dan modern.</p>
                <a href="../etalase/etalase.masjidrayabandung.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="../img/masjid-agung-AU.jpg" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Masjid Al-Ukhuwwah Bandung</h5>
                <p class="card-text">Masjid ini adalah salah satu masjid tertua di Bandung dan memiliki arsitektur bergaya kolonial Belanda. Masjid ini menjadi saksi perjalanan sejarah Islam di kota Bandung.</p>
                <a href="../etalase/etalase.masjidagungau.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="../img/ms-geologi.png" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Museum Geologi</h5>
                <p class="card-text">Museum ini menampilkan koleksi batuan, fosil, dan mineral, serta memberikan informasi tentang sejarah geologi Bandung dan Indonesia.</p>
                <a href="../etalase/etalase.msgeologi.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="../img/ms-sri-baduga.JPG" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Museum Sri Baduga</h5>
                <p class="card-text">Museum ini memperkenalkan sejarah dan budaya Sunda dengan koleksi artefak dan informasi tentang kerajaan-kerajaan Sunda dan kehidupan masyarakat Sunda.</p>
                <a href="../etalase/etalase.mssribaduga.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="../img/mk-asia-afrika.jpg" class="card-img-top" alt="project2" />
              <div class="card-body">
                <h5 class="card-title">Museum Konferensi Asia Afrika</h5>
                <p class="card-text">Gedung Merdeka, tempat berlangsungnya Konferensi Asia Afrika pada tahun 1955, sekarang menjadi museum yang menampilkan koleksi dan dokumentasi terkait konferensi tersebut.</p>
                <a href="../etalase/etalase.mkasiaafrika.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="../img/mprjw.jpg" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Museum Perjuangan Rakyat Jawa Barat</h5>
                <p class="card-text">Museum ini menampilkan artefak, foto, dan dokumentasi sejarah perjuangan rakyat Jawa Barat dalam meraih kemerdekaan.</p>
                <a href="../etalase/etalase.mprjw.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="../img/ms-pos-ind.png" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Museum Pos Indonesia</h5>
                <p class="card-text">Gedung ini dulunya merupakan Kantor Pos Pusat Bandung yang berdiri sejak tahun 1920. Sekarang, gedung ini menjadi museum yang memamerkan koleksi perangko, peralatan pos, dan informasi sejarah layanan pos di Indonesia.</p>
                <a href="../etalase/etalase.msposind.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="../img/ms-barli-bandung.jpg" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Museum Barli</h5>
                <p class="card-text">Museum ini didedikasikan untuk mengenang karya seniman terkenal Bandung, Barli Sasmitawinata. Museum ini menampilkan koleksi lukisan, patung, dan karya seni lainnya yang mencerminkan perkembangan seni rupa di Bandung.</p>
                <a href="../etalase/etalase.msbarli.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="../img/tugu-cibaduyut.jpg" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Sepatu Cibaduyut</h5>
                <p class="card-text">Industri sepatu di Cibaduyut, sebuah kawasan di Bandung, Jawa Barat, telah ada sejak akhir tahun 1920-an.</p>
                <a href="../etalase/etalase.cibay.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="../img/mblapi.jpg" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Taman Sejarah Bandung Lautan Api</h5>
                <p class="card-text">Taman ini didedikasikan untuk mengenang pertempuran sengit yang terjadi di Bandung pada masa Revolusi Nasional Indonesia. Di sini terdapat replika benteng-benteng pertahanan dan patung-patung pahlawan.</p>
                <a href="../etalase/etalase.mblapi.php" class="btn btn-primary">Lebih Lengkap</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="bg-dark p-2 text-center">
      <div class="container">
        <p class="text-white" style="padding-top: 1em;">Pemerintah Bandung © 2023</p>
      </div>
    </footer>

    <script src="../js/bootstrap/bootstrap.min.js"></script>
  </body>
</html>