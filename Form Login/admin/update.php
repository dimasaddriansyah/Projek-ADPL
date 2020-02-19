<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $username   = $_POST['username']; 
    $password   = $_POST['password'];
    $level      = $_POST['level'];   

    if($id=='' || $nama=='' || $username=='' || $password=='' || $level==''){
        echo "Gagal update, pastikan semua kolom di form telah terisi!<br>";
        echo '<a href="/projek/form login/admin/akun-pengguna.php">kembali</a>';
        return;
    }

    $query = "update level_user set nama='$nama', username='$username', password='$password' , level='$level' where id='$id'";

    if($koneksi->query($query)===true){
        echo "<br>Data ".$nama.' berhasil diupdate';
    } else{
        echo '<br>Data gagal diupdate';
    }
    echo "<br>";
    echo "<a href='/projek/form login/admin/akun-pengguna.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>