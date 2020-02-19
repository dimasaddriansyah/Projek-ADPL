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

    if($nim=='' || $nama=='' ||  $kelas=='' || $jurusan=='' || $prodi=='' || $email=='' || $no_hp=='' || $alamat==''){
        echo "Mohon cek kembali, pastikan semua telah terisi!<br>";
        echo '<a href="input.php">kembali</a>';
        return;
    }

    $query1 = "select * from mahasiswa where nama='$nama' or nim='$nim'";
    $count  = $koneksi->query($query1);
    if($count->num_rows > 0){
        echo "Mohon cek kembali, nama atau nim telah terdaftar!<br>";
        echo '<a href="input.php">kembali</a>';
        return;
    }

    $query = "insert into mahasiswa (nim,nama,id_kelas,id_jurusan,id_prodi,email,no_hp,alamat) values('$nim','$nama',  '$kelas', '$jurusan', '$prodi', '$email','$no_hp','$alamat')";
    
    if($koneksi->query($query)===true){
        echo "<br>Data ".$nim.' berhasil disimpan';
    } else{
        echo '<br>Data gagal disimpan';
    }
    echo "<br>";
    echo "<a href='index.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>