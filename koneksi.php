<?php
    $koneksi = mysqli_connect('localhost','root', '', 'perpus');

    if($koneksi-> connect_errno){
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
?>