<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi Anggota Perpus</title>
</head>
<body>
    <form action="login.php" method="post">
        Nama     : <input type="text" name="nama"><br>
        Password : <input type="password" name="password"><br>
        NRP      : <input type="text" name="nrp"><br>
        Email    : <input type="text" name="email"><br>
        Alamat   : <input type="text" name="alamat"><br>
        Kelas    : <select name="kelas">
            <option value="D3 IT-A">D3 IT-A</option>
            <option value="D3 IT-B">D3 IT-B</option>
            <option value="D4 IT-A">D4 IT-A</option>
            <option value="D4 IT-B">D4 IT-B</option>
            <option value="D4 DS">D4 DS</option>
        </select><br>
        Angkatan : <input type="text" name="angkatan"><br>
        <button type="submit">Submit</button>
    <form>
</body>
</html>