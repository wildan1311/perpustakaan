<?php
    $id_buku = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $pengarang = $_POST['pengarang'];

    @include 'koneksi.php';

    $sql = ociparse(
        $koneksi ,
        "
            UPDATE buku
            SET judul = '$judul' , penerbit = '$penerbit' , pengarang = '$pengarang'
            WHERE id_buku = '$id_buku'
        "
    );

    ociexecute($sql);

    header("Location: tabelBuku.php");
?>