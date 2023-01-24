<?php
include("auth_session.php");
require('db.php');

$nik = $_SESSION['nik'];

$sql = "SELECT username FROM users WHERE nik = '$nik'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    $_SESSION['username'] = $username;
}

?>

<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAMAI | Data Makam Indonesia</title>
    
    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylealt.css">
</head>
<body>    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">DAMAI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Tentang Kami</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#services">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="destroy.php">Keluar</a>
              </li>        
            </ul>
          </div>
        </div>
    </nav>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/home-1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Selamat Datang, <?= $_SESSION['username'] ?></h5>
                <p>Index data seluruh makam di indonesia</p>
                <p><a class="btn btn-warning mt-3" href="#services">Mulai</a></p>                  
            </div>
          </div>
        </div>
      </div>
      <!-- services section Starts -->
      <section class="services section-padding" id="services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>Fitur</h2>
                          <p>Beberapa fitur yang sangat membantu keluarga mengenai makam yang di cari</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-person"></i>
                            <h3 class="card-title">Pemakaman Keluarga</h3>
                            <a class="btn bg-warning text-dark" href="pemakaman_keluarga.php">Cari Makam</a>
                        </div>
                    </div>
                </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                            <i class="bi bi-cash"></i>
                              <h3 class="card-title">Penggalangan Dana</h3>
                              <a class="btn bg-warning text-dark" href="donasi.php">Buka Forum</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                            <i class="bi bi-geo-alt-fill"></i>
                              <h3 class="card-title">Identifikasi Makam</h3>
                              <a class="btn bg-warning text-dark" href="identifikasi_makam.php">Cari</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- services section Ends -->
      <!-- Contact starts -->
      <section id="contact" class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Hubungi Kami</h2>
                        <p class="bi bi-instagram"> Gobel_MDN.official</p>
                        <p class="bi bi-whatsapp"> 0854302291560</p>
                        <p class="bi bi-envelope"> gobel_official1@gmail.com</p>
                    </div>
                </div>
            </div>
		</div>
      </section>
      <!-- contact ends -->
      <!-- footer starts -->
      <footer class="bg-dark p-2 text-center">
          <div class="container">
              <p class="text-white">All Right Reserved By PT.GO_BEL</p>
          </div>
      </footer>
      <!-- footer ends -->    
    <!-- All Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>




<!--for getting the form download the code from download button-->