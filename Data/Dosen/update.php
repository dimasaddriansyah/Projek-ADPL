<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    $nidn               = $_POST['nidn'];
    $nip                = $_POST['nip'];
    $nama               = $_POST['nama'];
    $ttl                = $_POST['ttl'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $pangkat            = $_POST['pangkat'];
    $jabatan            = $_POST['jabatan'];
    $alamat             = $_POST['alamat'];
    $no_hp              = $_POST['no_hp'];
    $email              = $_POST['email'];

    if($nidn=='' || $nip=='' ||  $nama=='' || $ttl=='' || $jenis_kelamin=='' || $pangkat=='' || $jabatan=='' || $alamat=='' || $no_hp=='' || $email==''){
        echo "Gagal update, pastikan semua kolom di form telah terisi!<br>";
        echo '<a href="index.php">kembali</a>';
        return;
    }

    $query = "update dosen set nidn='$nidn', nip='$nip', nama='$nama' , ttl='$ttl', jenis_kelamin='$jenis_kelamin' , pangkat='$pangkat', jabatan='$jabatan', alamat='$alamat', no_hp='$no_hp', email='$email' where nidn=$nidn";

    if($koneksi->query($query)===true){
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    } else{
        echo "<script>alert('Data Gagal diubah.');window.location='index.php';</script>";
    }
    $koneksi->close();
?>