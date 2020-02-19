<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $id_ukt = $_GET['id_ukt'];

    if($id_ukt==''){
        echo "Data Gagal di hapus!<br>";
        echo '<a href="index.php">kembali</a>';
        return;
    }

    $query = "delete from ukt where id_ukt='$id_ukt'";

    if($koneksi->query($query)===true){
        echo "<br>Data berhasil dihapus";
    } else{
        echo '<br>Data gagal dihapus';
    }
    echo "<br>";
    echo "<a href='index.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>