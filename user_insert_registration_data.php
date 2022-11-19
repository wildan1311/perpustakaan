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

        if(isset($_POST['gambar'])){
            $gambar = $_POST['gambar'];
        }else{
            $gambar = "default.jpg";
        }

        $insertString = "INSERT INTO perpustakaan.pengguna(id_anggota , nama , email , alamat, gambar)
            VALUES('$nrp' , '$nama' , '$email' , '$alamat', '$gambar')";
        

        // ambil data file
        $namaFile = $gambar;

        // tentukan lokasi file akan dipindahkan
        $dirUpload = "assets/img/";

        // pindahkan file
        $terupload = move_uploaded_file($namaFile, $dirUpload.$namaFile);

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