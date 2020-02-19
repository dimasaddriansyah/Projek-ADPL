<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $nidn = $_GET['nidn'];

    $query = "delete from dosen where nidn='$nidn'";

    if($koneksi->query($query)===true){
        echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
    } else{
        echo "<script>alert('Data Gagal dihapus.');window.location='index.php';</script>";
    }
    $koneksi->close();
?>