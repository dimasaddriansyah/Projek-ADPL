<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $nama       = $_POST['nama'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $level      = $_POST['level'];

    if($nama=='' || $username=='' || $password=='' || $level==''){
        echo "Mohon cek kembali, pastikan semua telah terisi!<br>";
        echo '<a href="input.php">kembali</a>';
        return;
    }

    $query1 = "select * from level_user where username='$username' or password='$password'";
    $count  = $koneksi->query($query1);
    if($count->num_rows > 0){
        echo "Mohon cek kembali, Username atau Password telah terdaftar!<br>";
        echo '<a href="input.php">kembali</a>';
        return;
    }

    $query = "insert into level_user (nama, username, password, level) values('$nama', '$username', '$password', '$level')";
    
    if($koneksi->query($query)===true){
        echo "<br>Data ".$nama.' berhasil disimpan';
    } else{
        echo '<br>Data gagal disimpan';
    }
    echo "<br>";
    echo "<a href='/projek/form login/admin/akun-pengguna.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>