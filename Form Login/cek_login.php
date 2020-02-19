<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from level_user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		$_SESSION['status']= "login";
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard user
		header("location:/projek/index-user.php");
	}
}
else{
	header("location:index.php?pesan=gagal");
}
?>
