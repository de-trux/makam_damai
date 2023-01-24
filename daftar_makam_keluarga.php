<?php
require 'forum_function.php';
require 'db.php';
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makam Keluarga</title>
    
    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/stylealt.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">DAMAI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Tentang Kami</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="index.php#services">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#contact">Kontak</a>
              </li>        
            </ul>
          </div>
        </div>
      </nav>
      </div>
      <!-- about section starts -->
      <section id="about" class="about high-padding">
          <div class="container">
                <div class="row">
                  <div class="col">
                      <div class="section-header pb-5">
                          <h2>Daftar Makam Keluarga</h2>
                      </div>
                  </div>
                </div>
              <div class="row">
              <form method="post">
                <div class="form-group">
                  <label for="nama_daftar_keluarga">Name Lengkap</label>
                  <input type="text" class="form-control" name="nama_daftar_keluarga" placeholder="Nama Lengkap" required>
                </div>
                <br>
                <div class="form-group">
                  <label for="keluarga_nik">NIK</label>
                  <input type="number" class="form-control" name="keluarga_nik" placeholder="NIK">
                </div>
                <br>
                <div class="form-group">
                  <label for="kota_lahir">Tempat Lahir (Kota)</label>
                  <input type="text" class="form-control" name="kota_lahir" placeholder="Kota">
                </div>
                <br>
                <div class="form-group">
                  <label for="keluarga_tanggal_lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="keluarga_tanggal_lahir">
                </div>
                <br>
                <div class="form-group">
                  <label for="keluarga_tanggal_mati">Tanggal Dimakamkan</label>
                  <input type="date" class="form-control" name="keluarga_tanggal_mati">
                </div>
                <br>
                <div class="form-group">
                  <label for="usia_keluarga_mati">Usia Dimakamkan</label>
                  <input type="number" class="form-control" name="usia_keluarga_mati" placeholder="Usia">
                </div>
                <br>
                <div class="form-group">
                  <label for="posisi_keluarga">Posisi Dalam Keluarga</label>
                  <input type="text" class="form-control" name="posisi_keluarga" placeholder="Ayah/Ibu/Anak">
                </div>
                <br>
                <div class="form-group">
                  <label for="alamat_rumah_keluarga">Alamat</label>
                  <input type="text" class="form-control" name="alamat_rumah_keluarga" placeholder="Alamat">
                </div>
                <br>
                <label for="alamat_makam_keluarga">Pilih Makam</label>
                  <select class="form-control" name="alamat_makam_keluarga">
                      <?php
                      $query = "SELECT * FROM daftar_makam";
                      $result = mysqli_query($con, $query);
                      while($row = mysqli_fetch_array($result)) {
                          echo "<option value='".$row['nama_daftar_makam']."'>".$row['nama_daftar_makam']."</option>";
                      };
                      ?>
                  </select> 
                <br>  
                <div class="form-group">
                    <label for="file-upload">Foto KTP</label>
                    <div>
                        <input type="file" class="form-control-file" id="file-upload" accept=".jpg, .jpeg, .png">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="file-upload">Foto KK</label>
                    <div>
                        <input type="file" class="form-control-file" id="file-upload" accept=".jpg, .jpeg, .png">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="addkeluarga">Submit</button>
              </form>
              </div>
          </div>
      </section>
      <!-- about section Ends -->
    <!-- All Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>




<!--for getting the form download the code from download button-->