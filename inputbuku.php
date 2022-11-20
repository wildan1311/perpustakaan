<?php @include 'koneksi.php'; ?>

<?php

    $idbuku = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['Pengarang'];
    $penerbit = $_POST['Penerbit'];

    ociexecute(ociparse($koneksi, "
      create or replace PROCEDURE regist
        (
        nrp_ IN VARCHAR2
        , nama_ IN VARCHAR2
        , email_ IN VARCHAR2
        , alamat_ IN VARCHAR2
        , gambar_ IN VARCHAR2
        ) AS
        BEGIN
        insert into perpus.pengguna (nrp,nama,email,alamat,gambar) values (nrp_, nama_, email_, alamat_, gambar_);
        commit;
        END regist;
    "));

    $sqlInsertSyntax = 
        ociparse($koneksi , 
            "INSERT INTO perpus.buku
             VALUES ('$idbuku', '$judul', '$penerbit', '$pengarang' , 'ready')"
            );

    if (!ociexecute($sqlInsertSyntax)){
        echo "<p>" . oci_error($sqlInsertSyntax)['message'] . "</p>";
    }
    else
        header("Location: input_Buku.php");

    exit;
?>