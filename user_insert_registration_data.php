<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    try{
        $database = new PDO("mysql:$hostname;dbname=mysql" ,
            $username ,
            $password);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $nrp = $_POST['nrp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $insertString = "INSERT INTO perpustakaan.user(id_anggota , nama , email , alamat , password)
        VALUES('$nrp' , '$nama' , '$email' , '$alamat' ,'$password')";

    $database->exec($insertString);
    $database = null;

    header("Location: user_daftar.html");
    exit;
?>