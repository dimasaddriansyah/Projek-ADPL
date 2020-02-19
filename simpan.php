<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $nama       = $_POST['nama'];
    $nim        = $_POST['nim'];
    $pesan      = $_POST['pesan'];
    

    if($nama=='' || $nim=='' || $pesan==''){
        echo "Mohon cek kembali, pastikan semua telah terisi!<br>";
        echo '<a href="index.php">kembali</a>';
        return;
    }

    $query1 = "select * from saran where nama='$nama' or nim='$nim'";
    $count  = $koneksi->query($query1);
    if($count->num_rows > 0){
        echo "Mohon cek kembali, nama atau nim telah terdaftar!<br>";
        echo '<a href="index.php">kembali</a>';
        return;
    }

    $query = "insert into saran (nama, nim, pesan) values('$nama', '$nim', '$pesan')";
    
    if($koneksi->query($query)===true){
        echo "<br>Data Saran ".$nama.' berhasil disimpan';
    } else{
        echo '<br>Data gagal disimpan';
    }
    echo "<br>";
    echo "<a href='index.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>