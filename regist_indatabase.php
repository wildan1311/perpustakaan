<?php 
    @include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];  
    $sql = "insert into user values($username, $password, $alamat, $email)";

    mysqli_query($koneksi, $sql);
?>