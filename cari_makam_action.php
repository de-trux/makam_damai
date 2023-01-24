<?php
  require_once 'db.php';

  $searchText = $_POST['query'];
  $query = "SELECT DISTINCT nama_daftar_makam FROM daftar_makam WHERE nama_daftar_makam LIKE '%$searchText%' ORDER BY nama_daftar_makam LIMIT 10";
  $result = mysqli_query($con, $query);
  
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<a href="#" class="list-group-item list-group-item-action">' . $row['nama_daftar_makam'] . '</a>';
    }
  } else {
    echo '<p>No Results Found</p>';
  }
?>
