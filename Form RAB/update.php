<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $id_rab                  = $_POST['id_rab'];
    $id_unit_kerja         = $_POST['nama_unit_kerja'];
    $tanggal_pelaksanaan     = $_POST['tanggal_pelaksanaan'];
    $nama_file               = $_POST['nama_file'];   

    if($id_rab=='' || $id_unit_kerja=='' || $tanggal_pelaksanaan=='' || $nama_file==''){
        echo "Gagal update, pastikan semua kolom di form telah terisi!<br>";
        echo '<a href="index.php">kembali</a>';
        return;
    }

    $query = "update rab set id_unit_kerja='$id_unit_kerja',tanggal_pelaksanaan='$tanggal_pelaksanaan', nama_file='$nama_file' where id_rab='$id_rab'";

    if($koneksi->query($query)===true){
        echo "<br>Data ".$id_unit_kerja.' berhasil diupdate';
    } else{
        echo '<br>Data gagal diupdate';
    }
    echo "<br>";
    echo "<a href='index.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>