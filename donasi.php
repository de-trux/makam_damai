<?php
require 'forum_function.php';
require 'db.php';
?>
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
      </div>
      <!-- section starts -->
      <section id="donasi" class="about section-padding">
          <div class="container">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Donasi</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-plus-square"></i> Tambah Donasi
                                </button>
                                <br>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Donasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>                                   
                                        <tbody>
                                            <?php
                                            $makamquery = mysqli_query($con,"select * from forum");
                                            while($data=mysqli_fetch_array($makamquery)){
                                                $judul = $data['judul'];
                                                $uang = $data['uang'];
                                                $deskripsi = $data['deskripsi'];
                                                $author = $data['author'];
                                                $id = $data['id'];
                                            ?>
                                            <tr>
                                                <td> 
                                                <p class="capital"><?=$judul;?></p>
                                                <p>  <?=$deskripsi;?> Oleh <?=$author;?> </p>
                                                </td>
                                                <td><br>Rp<?=$uang;?></td>
                                                <td>
                                                <br>
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$id;?>">
                                                    Donasi
                                                </button>
                                                </td>
                                            </tr>
                                                <!-- Donasi Modal -->
                                                <div class="modal fade" id="edit<?=$id;?>">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                    
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                        <h4 class="modal-title">Donasi</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <form method="post">
                                                        <div class="modal-body">
                                                        <input type="text" name="donatur" placeholder="Donatur" class="form-control" required>
                                                        <br>
                                                        <input type="number" name="increment" placeholder="Nominal" class="form-control" required>
                                                        <br>
                                                        <input type="number" name="donatur_hp" placeholder="Nomor HP" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="donatur_email" placeholder="Alamat Email" class="form-control">
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="donatur_method">Metode Pembayaran</label>
                                                          <select class="form-control" name="donatur_method">
                                                            <option>BRI</option>
                                                            <option>BCA</option>
                                                            <option>OVO</option>
                                                            <option>DANA</option>
                                                            <option>ShopeePay</option>
                                                            <option>PayPal</option>
                                                          </select>
                                                        </div> 
                                                        <br>
                                                        <input type="hidden" name="id" value="<?=$id;?>">   
                                                        <button type="submit" class="btn btn-primary" name="tambahdonasi">Submit</button>
                                                        </div>
                                                        </form>           
                                                    </div>
                                                    </div>
                                                </div>
                                            <?php
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
        <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Tambah Donasi</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <form method="post">
            <div class="modal-body">
            <input type="text" name="judul" placeholder="Judul" class="form-control" required>
            <br>
            <input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control" required>
            <br>
            <input type="text" name="author" class="form-control" placeholder="Author" required>
            <br>
            <button type="submit" class="btn btn-primary" name="addforum">Submit</button>
            </div>
            </form>           
        </div>
        </div>
        </div>
      </section>
      <!-- section Ends -->
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




<!--for getting the form download the code from download button-->