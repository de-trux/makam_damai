<?php
session_start();

//Membuat koneksi ke database
include "db.php";

//Menambah Forum
if(isset($_POST['addforum'])){
    $judul = $_POST['judul'];
    $author = $_POST['author'];
    $uang = $_POST['uang'];
    $deskripsi = $_POST['deskripsi'];

    $addtotable = mysqli_query($con,"insert into forum (judul, uang, author, deskripsi) values('$judul','$uang','$author','$deskripsi')");
    if($addtotable){
        header('location:donasi.php');
    } else {
        echo 'Gagal';
        header('location:donasi.php');
    }
};

//Edit info Mobil
if(isset($_POST['updatefilm'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tahun = $_POST['tahun'];
    $jam = $_POST['jam'];
    
    $update = mysqli_query($con,"update film set nama='$nama', tahun='$tahun', jam='$jam' where id='$id'");
    if($update){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
};

//Tambah Donasi
if(isset($_POST['tambahdonasi'])){
    $increment = $_POST['increment'];
    $id = $_POST['id'];
    $uang = $_POST['uang'];
    $donatur = $_POST['donatur'];
    $donatur_hp = $_POST['donatur_hp'];
    $donatur_email = $_POST['donatur_email'];
    $donatur_method = $_POST['donatur_method'];

    $sql = "UPDATE forum SET uang = uang + $increment WHERE id = '$id'";
    $sql2 = "INSERT INTO forum_donatur (donatur_hp, donatur_email, donatur_method, donatur, increment) VALUES ('$donatur_hp','$donatur_email','$donatur_method','$donatur','$increment')";
    $result = mysqli_query($con, $sql);
    $result2 = mysqli_query($con, $sql2);

    if($result and $result2){
        header('location:donasi_sukses.php');
    }else{
        echo "Error updating price: " . mysqli_error($con);
    
    };
};

if(isset($_POST['addkeluarga'])){
    $nama_daftar_keluarga = $_POST['nama_daftar_keluarga'];
    $alamat_makam_keluarga = $_POST['alamat_makam_keluarga'];
    $posisi_keluarga = $_POST['posisi_keluarga'];
    $keluarga_tanggal_lahir = date('Y-m-d',strtotime($_POST['keluarga_tanggal_lahir']));
    $keluarga_tanggal_mati = date('Y-m-d',strtotime($_POST['keluarga_tanggal_mati']));
    $keluarga_nik = $_POST['keluarga_nik'];
    $usia_keluarga_mati = $_POST['usia_keluarga_mati'];
    $alamat_rumah_keluarga = $_POST['alamat_rumah_keluarga']; 

    $sql = "INSERT INTO makam_keluarga (nama_daftar_keluarga, alamat_makam_keluarga, posisi_keluarga, keluarga_tanggal_lahir, keluarga_tanggal_mati, keluarga_nik, usia_keluarga_mati, alamat_rumah_keluarga) VALUES ('$nama_daftar_keluarga','$alamat_makam_keluarga','$posisi_keluarga','$keluarga_tanggal_lahir','$keluarga_tanggal_mati','$keluarga_nik','$usia_keluarga_mati','$alamat_rumah_keluarga')";
    $result = mysqli_query($con, $sql);
    
    if($result){
        header('location:daftar_berhasil.php');
    }else{
        echo "Error updating price: " . mysqli_error($con);
    
    };
};


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