<?php
    $koneksi = ocilogon('perpus', '1234', 'localhost:1521/XEPDB1');
    if (!$koneksi)
        echo "Gagal Terkoneksi Dengan Database Oracle";
    // $koneksi = mysqli_connect('localhost','root', '', 'perpustakaan');

    // if($koneksi-> connect_errno){
    //     echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    //     exit();
    // }
?>