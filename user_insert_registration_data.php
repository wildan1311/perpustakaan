<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    try{
        $database = new PDO("mysql:$hostname;dbname=mysql" ,
            $username ,
            $password);

        $nama = $_POST['nama'];
        $nrp = $_POST['nrp'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];

        $insertString = "INSERT INTO perpustakaan.user(id_anggota , nama , email , alamat)
            VALUES('$nrp' , '$nama' , '$email' , '$alamat')";

        $database->exec($insertString);
        $database = null;
        header("Location: user_daftar.php");

    }catch(PDOException $e){
        $messages = $e->getMessage();
        echo "$messages<br><br>";
        echo "Error, Kemungkinan karena NRP sudah pernah digunakan. Coba daftar dengan NRP lain!";
    }
    
    exit;
?>