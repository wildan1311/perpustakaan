<?php
    $id_anggota = $_POST['nrp'] ;
    $id_buku = $_POST['id_buku'] ;
    
    @include 'koneksi.php';
    ociexecute(ociparse($koneksi , "
      create or replace PROCEDURE peminjaman
      (
      idbuku_ IN VARCHAR2,
      id_anggota_ IN VARCHAR2,
      tgl_pinjam_ IN date,
      tgl_kembali_ IN date,
      tabel_ IN VARCHAR2
      ) AS
      BEGIN
      insert into transaksi(id_buku, id_anggota, tgl_pinjam, tgl_kembali) values(idbuku_,id_anggota_, tgl_pinjam_, tgl_kembali_);
      commit;
      END peminjaman;
    "));
    
    $sql = "select u.nrp, b.id_buku from pengguna u, buku b where u.nrp='$id_anggota' and b.id_buku = '$id_buku'";
    $sql = ociparse($koneksi, $sql);
    ociexecute($sql);
    // $result = mysqli_query($koneksi, $sql);
    if(ocifetch($sql)){
      // $input = mysqli_query($koneksi, "insert into transaksi values('$id_buku', '$id_anggota', '$now', '$tomorrow')");
      $sql = ociparse($koneksi, "begin peminjaman('$id_buku','$id_anggota', sysdate, sysdate+10, 'transaksi'); end;");
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