<?php
    include('koneksi.php');
    $id_buku = $_GET['id_buku'];
    $id_anggota = $_GET['id_anggota'];

    $sql = ociparse($koneksi, "DELETE FROM transaksi where id_buku = '$id_buku' and id_anggota = '$id_anggota'");
    ociexecute($sql);

    header('Location: tables.php');
?>