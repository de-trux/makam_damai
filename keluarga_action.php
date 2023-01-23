<?php
  require_once 'db.php';

  $searchText = $_POST['query'];
  $query = "SELECT DISTINCT alamat_makam_keluarga FROM makam_keluarga WHERE alamat_makam_keluarga LIKE '%$searchText%' ORDER BY alamat_makam_keluarga LIMIT 10";
  $result = mysqli_query($con, $query);
  
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<a href="#" class="list-group-item list-group-item-action">' . $row['alamat_makam_keluarga'] . '</a>';
    }
  } else {
    echo '<p>No Results Found</p>';
  }
?>
