<?php
  require_once 'db.php';

  if(isset($_POST['search']) && !empty($_POST['search'])){
    $nama_makam = $_POST['search'];
    $query = "SELECT * FROM makam_keluarga WHERE alamat_makam_keluarga = '$nama_makam'";
    $result = mysqli_query($con, $query);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
    } else {
        echo "No Results Found.";
    }
  };
?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Responsive Landing Page Design</title>
    
    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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

  <section id="about" class="high-padding">
          <div class="container">
              <h1 class="mt-4">Lokasi <?= $data['alamat_makam_keluarga'] ?></h1>
              <div class="row">
              <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=800&amp;height=500&amp;hl=en&amp;q=<?= $data['alamat_makam_keluarga'] ?>&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://pdflist.com/" alt="pdf download">Pdf download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:500px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:500px;}.gmap_iframe {height:500px!important;}</style></div>
              </div>
          </div>
      </section>

  <section id="donasi">
          <div class="container">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Daftar Jenazah Di <?= $data['alamat_makam_keluarga'] ?></h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama Keluarga</th>
                                                <th>Alamat Rumah</th>
                                                <th>Posisi Keluarga</th>
                                            </tr>
                                        </thead>                                   
                                        <tbody>
                                            <?php
                                            $makamquery = mysqli_query($con,"SELECT * FROM makam_keluarga WHERE alamat_makam_keluarga = '$nama_makam'");
                                            if ($result->num_rows > 0) {
                                              while($data=mysqli_fetch_array($makamquery)){
                                                $nama_daftar_keluarga = $data['nama_daftar_keluarga'];
                                                $posisi_keluarga = $data['posisi_keluarga'];
                                                $keluarga_tanggal_lahir = date('Y-m-d',strtotime($data['keluarga_tanggal_lahir']));
                                                $keluarga_tanggal_mati = date('Y-m-d',strtotime($data['keluarga_tanggal_mati']));
                                                $keluarga_nik = $data['keluarga_nik'];
                                                $usia_keluarga_mati = $data['usia_keluarga_mati'];
                                                $alamat_rumah_keluarga = $data['alamat_rumah_keluarga']; 
                                            ?>
                                            <tr>
                                                <td><?=$nama_daftar_keluarga;?></td>
                                                <td><?=$alamat_rumah_keluarga;?></td>
                                                <td><?=$posisi_keluarga;?></td>
                                            </tr>
                                            <?php
                                              }
                                            } else {
                                              header('location:noresult.php');
                                            }
                                            ?>                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
          </div>
      </section>
  <!-- All Js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>