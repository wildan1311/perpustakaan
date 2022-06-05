<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    try{
        $database = new PDO("mysql:$hostname;dbname=mysql" ,
            $username ,
            $password);
        $idbuku = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $pengarang = $_POST['Pengarang'];
        $penerbit = $_POST['Penerbit'];

        $database -> exec("INSERT INTO perpustakaan.buku
        VALUES ('$idbuku', '$judul', '$penerbit', '$pengarang')");
        $database = null;
    }catch(PDOException $e){
        $messages = $e->getMessage();
    }
    header("Location: input_Buku.php");

    exit;
?>