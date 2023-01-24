<?php
  include("auth_session.php");
  require_once 'db.php';

  if(isset($_POST['search']) && !empty($_POST['search'])){
    $nama_makam = $_POST['search'];
    $query = "SELECT * FROM daftar_makam WHERE nama_daftar_makam = '$nama_makam'";
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
    <title>Detail <?= $data['nama_daftar_makam'] ?></title>
    
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
              <h1 class="mt-4">Lokasi <?= $data['nama_daftar_makam'] ?></h1>
              <div class="row">
              <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=800&amp;height=500&amp;hl=en&amp;q=<?= $data['nama_daftar_makam'] ?>&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://pdflist.com/" alt="pdf download">Pdf download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:500px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:500px;}.gmap_iframe {height:500px!important;}</style></div>
              </div>
          </div>
      </section>

  <section id="donasi">
          <div class="container">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Info <?= $data['nama_daftar_makam'] ?></h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Info</th>
                                            </tr>
                                        </thead>                                   
                                        <tbody>
                                            <tr>
                                                <td><img src="gambar/<?php echo $data["gambar_makam"]; ?>" height = 250 title="<?php echo $data['gambar_makam']; ?>"></td>
                                                <td>
                                                Provinsi : <?= $data['provinsi_daftar_makam'] ?>
                                                <br>
                                                Kabupaten : <?= $data['kabupaten_daftar_makam'] ?>
                                                <br>
                                                Kecamatan :<?= $data['kecamatan_daftar_makam'] ?>
                                                <br>
                                                Desa : <?= $data['desa_daftar_makam'] ?>
                                                <br>
                                                RT/RW : <?= $data['rt_rw_daftar_makam'] ?>
                                                <br>
                                                Luas Makam : <?= $data['luas_daftar_makam'] ?>
                                                <br>
                                                Tahun : <?= $data['tahun_daftar_makam'] ?>
                                                <br>
                                                Tampungan Jenazah : <?= $data['tampungan_daftar_makam'] ?>
                                                </td>
                                            </tr>                                          
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#pengurus">
                                <i class="fa fa-plus-square"></i> Pengurus
                                </button>

                                <div class="modal fade" id="pengurus">
                                <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title">Info Pengurus</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <form method="post">
                                      <div class="modal-body">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <tbody>
                                            <tr>
                                                <td><img src="gambar/<?php echo $data["gambar_pengurus"]; ?>" height = 150 title="<?php echo $data['gambar_pengurus']; ?>"></td>
                                                <td><?= $data['nama_pengurus_makam'] ?>
                                                <br><?= $data['alamat_pengurus'] ?>
                                                <br><?= $data['no_hp_pengurus'] ?>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                    </form>           
                                </div>
                                </div>
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