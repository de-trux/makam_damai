<?php
  require_once 'db.php';

  if(isset($_POST['search']) && !empty($_POST['search'])){
    $nama_makam = $_POST['search'];
    $stmt = $con->prepare("SELECT * FROM list_makam WHERE nama_makam = ?");
    $stmt->bind_param("s", $nama_makam);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
    } else {
        echo "No Results Found.";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-5 mx-auto">
        <div class="card shadow text-center">
          <div class="card-header">
            <h1><?= $data['nama_makam'] ?></h1>
          </div>
          <div class="card-body">            
            <h4><b>Provinsi :</b> <?= $data['provinsi'] ?></h4>
            <h4><b>Kota :</b> <?= $data['kota'] ?></h4>
            <h4><b>ID Makam :</b> <?= $data['id'] ?></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>