<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AutoComplete Search Using Bootstrap 4, PHP, PDO - MySQL & Ajax</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
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
                <a class="nav-link" href="#services">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Kontak</a>
              </li>        
            </ul>
          </div>
        </div>
    </nav>
  <div class="container high-padding">
    <div class="row mt-4">
      <div class="col-md-8 mx-auto white rounded p-4">
        <h5 class="text-center font-weight-bold">Halaman Pencarian Makam (WIP)</h5>
        <hr class="my-1">
        <h5 class="text-center text-secondary">Cari Makam</h5>
        <form action="details.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-warning" placeholder="Cari..." autocomplete="off" required>
            <div class="input-group-append">
              <input type="submit" name="submit" value="Cari" class="btn btn-warning btn-lg rounded-0">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5" style="position: relative;margin-top: -30px;margin-left: 250px;">
        <div class="list-group" id="show-list">
          <!-- Here autocomplete list will be display -->
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/search_script.js"></script>
</body>

</html>