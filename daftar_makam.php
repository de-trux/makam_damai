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
    <title>Daftar Makam</title>
    
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
              <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nama_daftar_makam">Nama Pemakaman</label>
                  <input type="text" class="form-control" name="nama_daftar_makam" placeholder="Nama Pemakaman">
                </div>
                <br>
                <div class="form-group">
                  <label for="provinsi_daftar_makam">Provinsi</label>
                  <input type="text" class="form-control" name="provinsi_daftar_makam" placeholder="Provinsi">
                </div>
                <br>
                <div class="form-group">
                  <label for="kabupaten_daftar_makam">Kabupaten</label>
                  <input type="text" class="form-control" name="kabupaten_daftar_makam" placeholder="Kabupaten">
                </div>
                <br>
                <div class="form-group">
                  <label for="kecamatan_daftar_makam">Kecamatan</label>
                  <input type="text" class="form-control" name="kecamatan_daftar_makam" placeholder="Kecamatan">
                </div>
                <br>
                <div class="form-group">
                <label for="desa_daftar_makam">Desa</label>
                  <input type="text" class="form-control" name="desa_daftar_makam" placeholder="Desa">
                </div>
                <br>
                <div class="form-group">
                  <label for="rt_rw_daftar_makam">RT/RW</label>
                  <input type="text" class="form-control" name="rt_rw_daftar_makam" placeholder="RT/RW">
                </div>
                <br>
                <div class="form-group">
                  <label for="luas_daftar_makam">Luas Lokasi</label>
                  <input type="text" class="form-control" name="luas_daftar_makam" placeholder="Luas Lokasi">
                </div>
                <br>
                <div class="form-group">
                  <label for="tahun_daftar_makam">Tahun</label>
                  <input type="text" class="form-control" name="tahun_daftar_makam" placeholder="Tahun">
                </div>
                <br>
                <div class="form-group">
                  <label for="tampungan_daftar_makam">Jumlah Tampungan</label>
                  <input type="text" class="form-control" name="tampungan_daftar_makam" placeholder="Jumlah Tampungan">
                </div>
                <br>
                <div class="form-group">
                  <label for="nama_pengurus_makam">Pengurus Makam</label>
                  <input type="text" class="form-control" name="nama_pengurus_makam" placeholder="Pengurus Makam">
                </div>
                <br>
                <div class="form-group">
                  <label for="no_hp_pengurus">Nomor HP Pengurus</label>
                  <input type="text" class="form-control" name="no_hp_pengurus" placeholder="Nomor HP Pengurus">
                </div>
                <br>
                <div class="form-group">
                  <label for="alamat_pengurus">Alamat Pengurus</label>
                  <input type="text" class="form-control" name="alamat_pengurus" placeholder="Alamat Pengurus">
                </div>
                <br>
                <div class="form-group">
                    <label for="gambar_makam">Foto Makam</label>
                    <div>
                        <input type="file" name="gambar_makam" accept=".jpg, .jpeg, .png">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="gambar_pengurus">Foto Pengurus</label>
                    <div>
                        <input type="file" name="gambar_pengurus" accept=".jpg, .jpeg, .png">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="addmakam">Submit</button>
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