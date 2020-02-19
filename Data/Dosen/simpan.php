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
        echo "<script>alert('Mohon cek kembali, pastikan semua telah terisi!.');window.location='index.php';</script>";
        return;
    }

    $query1 = "select * from dosen where nip='$nip' or nidn='$nidn'";
    $count  = $koneksi->query($query1);
    if($count->num_rows > 0){
        echo "<script>alert('Mohon cek kembali, Nip atau Nidn telah terdaftar!.');window.location='index.php';</script>";
        return;
    }

    $query = "insert into dosen (nidn,nip,nama,ttl,jenis_kelamin,pangkat,jabatan,alamat,no_hp,email) values('$nidn','$nip',  '$nama', '$ttl', '$jenis_kelamin', '$pangkat','$jabatan','$alamat','$no_hp','$email')";
    
    if($koneksi->query($query)===true){
        echo "<script>alert('Data berhasil disimpan.');window.location='index.php';</script>";
    } else{
        echo "<script>alert('Data Gagal disimpan.');window.location='index.php';</script>";
    }
    $koneksi->close();
?>