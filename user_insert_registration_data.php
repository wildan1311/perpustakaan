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
    $kelas = $_POST['kelas'];
    $angkatan = $_POST['angkatan'];

    $insertString = "INSERT INTO perpustakaan.user(nama , password , nrp , email , alamat , kelas , angkatan)
        VALUES('$nama' , '$password' , '$nrp' , '$email' , '$alamat' , '$kelas' , '$angkatan')";

    $database->exec($insertString);
    $database = null;

    header("Location: chose_login.php");
?>