<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","makam");
    if(!isset($_SESSION["nik"])) {
        header("Location: login.php");
        exit();
    }
?>