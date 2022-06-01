<?php
    @include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $login = mysqli_query($koneksi, "Select username, password, level from user where username=$username and password=$password");
    if(mysqli_num_rows($login)>0){
        session_start(); 
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        //cek level 
        if(mysqli_fetch_assoc($login)['level']=='admin'){
            $_SESSION['level'] = 'admin';
            header("location:admin.php");
        }else if(mysqli_fetch_assoc($login)['level']=='anggota'){
            $_SESSION['level'] = 'anggota';
            header("location:anggota.php");
        }
    }else{
        //tampilkan error
        header("location:login.php?pesan=gagal");
    }
    session_destroy();
?>