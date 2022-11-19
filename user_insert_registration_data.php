<?php @include 'koneksi.php';

$nama = $_POST['nama'];
$nrp = $_POST['nrp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

if (isset($_POST['gambar'])) {
    $gambar = $_POST['gambar'];
} else {
    $gambar = "assets/img/default.jpg";
}

$sqlregistSyntax =
    ociparse(
        $koneksi,"declare begin regist('$nrp' , '$nama' , '$email' , '$alamat', '$gambar'); end;");

// ambil data file
$namaFile = $gambar;

// tentukan lokasi file akan dipindahkan
$dirUpload = "assets/img/";

// pindahkan file
$terupload = move_uploaded_file($namaFile, $dirUpload);

if (!ociexecute($sqlregistSyntax)) {
    echo "<p>" . oci_error($sqlregistSyntax)['message'] . "</p>";
} else
    header("Location: user_daftar.php");

exit;
