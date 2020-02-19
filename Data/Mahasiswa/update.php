<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama'];
    $kelas      = $_POST['id_kelas'];
    $jurusan    = $_POST['id_jurusan'];
    $prodi      = $_POST['id_prodi'];
    $email      = $_POST['email'];   
    $no_hp      = $_POST['no_hp'];
    $alamat     = $_POST['alamat'];

    if($nim=='' ||$nama=='' ||  $kelas=='' || $jurusan=='' || $prodi=='' || $email=='' || $no_hp=='' || $alamat==''){
        echo "Gagal update, pastikan semua kolom di form telah terisi!<br>";
        echo '<a href="index.php">kembali</a>';
        return;
    }

    $query = "update mahasiswa set nim='$nim', nama='$nama',  id_kelas='$kelas', id_jurusan='$jurusan' , id_prodi='$prodi', email='$email', no_hp='$no_hp','alamat='$alamat' where nim=$nim";

    if($koneksi->query($query)===true){
        echo "<br>Data ".$nim.' berhasil diupdate';
    } else{
        echo '<br>Data gagal diupdate';
    }
    echo "<br>";
    echo "<a href='index.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>