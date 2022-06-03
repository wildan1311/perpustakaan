<?php
    $id_anggota = $_POST['nrp'] ;
    $id_buku = $_POST['id_buku'] ;
    $now = date("Y-m-d");
    $now1 = str_replace('-', '/', $now);
    $tomorrow = date('Y-m-d',strtotime($now1 . "+10 days"));
    
    @include 'koneksi.php';
    $sql = "select u.id_anggota, b.id_buku from user u, buku b where u.id_anggota='$id_anggota' and b.id_buku = '$id_buku'";
    $result = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($result)!=0){
      $input = mysqli_query($koneksi, "insert into transaksi values('$id_buku', '$id_anggota', '$now', '$tomorrow')");
      if($input === true){
        echo "success";
      }else{
          echo "duplikat";
      }
    }else{
      $data='failed';
      echo $data;
    }
?>