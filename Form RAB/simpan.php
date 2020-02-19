<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $nama_unit_kerja        = $_POST['id_unit_kerja'];
    $tanggal_pelaksanaan   = $_POST['tanggal_pelaksanaan'];
    $nama_file          = $_POST['nama_file'];


    if($nama_unit_kerja=='' || $tanggal_pelaksanaan=='' || $nama_file==''){
        echo "Mohon cek kembali, pastikan semua telah terisi!<br>";
        echo '<a href="input.php">kembali</a>';
        return;
    }

    $query1 = "select * from ukt where tanggal_pelaksanaan=$tanggal_pelaksanaan";
    $count  = $koneksi->query($query1);
    if($count->num_rows > 0){
        echo "Mohon cek kembali, Nim telah terdaftar!<br>";
        echo '<a href="input.php">kembali</a>';
        return;
    }
    $query = "insert into ukt (id_unit_kerja,tanggal_pelaksanaan,nama_file) values('$nama_unit_kerja','$tanggal_pelaksanaan','$nama_file')";
    
    if($koneksi->query($query)===true){
        echo "<br>Data ".$nama_unit_kerja.' berhasil disimpan';
    } else{
        echo '<br>Data gagal disimpan';
    }
    echo "<br>";
    echo "<a href='index.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>