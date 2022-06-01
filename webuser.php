<?php
    @include 'koneksi.php';

    $sql = "Select * from buku";
    $ambil = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_all($ambil, MYSQLI_ASSOC);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1' style='width: 100%;'>
    <?php
        echo "
        <tr>
        <td>ID Buku</td>
        <td>Judul Buku</td>
        <td>penerbit</td>
        <td>pengarang</td>
        <td>ACTION<td>
    </tr>
    ";
    foreach($row as $row){
        //nama, nrp, kelas, jenis_kelamin, agama, tempat_lahir, tgl_lahir, alamat, sd, smp, sma, email, homepage, hobby, interest
        echo "<tr>
        <td>".$row['id_buku']."</td>
        <td>".$row['judul']."</td>
        <td>".$row['penerbit']."</td>
        <td>".$row['pengarang']."</td>
        <td><a>Pinjam</a>
    </tr>";
    }
    echo "</table>";
    ?>
        
</body>

</html>