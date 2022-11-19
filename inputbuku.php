<?php @include 'koneksi.php'; ?>

<?php

    $idbuku = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['Pengarang'];
    $penerbit = $_POST['Penerbit'];

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