<?php
    $id_anggota = $_POST['nrp'] ;
    $id_buku = $_POST['id_buku'] ;
    $now = date("Y-m-d");
    $now1 = str_replace('-', '/', $now);
    $tomorrow = date('Y-m-d',strtotime($now1 . "+10 days"));
    
    @include 'koneksi.php';
    $sql = "select u.nrp, b.id_buku from pengguna u, buku b where u.nrp='$id_anggota' and b.id_buku = '$id_buku'";
    $sql = ociparse($koneksi, $sql);
    ociexecute($sql);
    // $result = mysqli_query($koneksi, $sql);
    if(ocifetch($sql)){
      // $input = mysqli_query($koneksi, "insert into transaksi values('$id_buku', '$id_anggota', '$now', '$tomorrow')");
      $sql = ociparse($koneksi, "begin peminjaman('$id_buku','$id_anggota', sysdate, sysdate+1, 'transaksi'); end;");
      $input = ociexecute($sql);
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