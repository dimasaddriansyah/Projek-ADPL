<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validasi UKT</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
			<?php
            $host = "localhost"; // Nama hostnya
            $username = "root"; // Username
            $password = ""; // Password (Isi jika menggunakan password)
            $database = "akademik"; // Nama databasenya
            $connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL
			if(isset($_POST['upload'])){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext       = pathinfo($file_name, PATHINFO_EXTENSION);
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
                
                $golongan       = $_POST['golongan'];
                $nim            = $_POST['nim'];
				$nama			= $_POST['nama'];
				$tgl			= date("Y-m-d");
 
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 1044070){
						$lokasi = 'files/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysqli_query($connect,"INSERT INTO ukt VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi','$nim','$golongan')");
						if($in){
                            echo "<script>alert('SUCCESS: File berhasil di Upload!');window.location='index.php';</script>";
						}else{
                            echo "<script>alert('ERROR: Gagal upload file!');window.location='index.php';</script>";
						}
					}else{
                        echo "<script>alert('ERROR: Besar ukuran file (file size) maksimal 1 Mb!');window.location='index.php';</script>";
					}
				}else{
                    echo "<script>alert('ERROR: Ekstensi file tidak di izinkan!');window.location='index.php';</script>";
                }
                
			}
			?>
 
            <div class="main">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-img">
                            <img src="/projek/images/polindra.png">
                        </div>
                        <div class="signup-form">
                    <form action="" class="register-form" id="register-from" method="post" enctype="multipart/form-data">
                    <h2 align="center">From Validasi UKT</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">NIM  :</label>
                                <input type="text" name="nim" id="name" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">Golongan :</label>
                                <div class="form-select">
                                    <select name="golongan" id="state">
                                        <option value=""></option>
                                        <option value="500000">500000</option>
                                        <option value="1000000">1000000</option>
                                        <option value="1500000">1500000</option>
                                        <option value="2000000">2000000</option>
                                        <option value="2500000">2500000</option>
                                        <option value="3000000">3000000</option>
                                        <option value="3500000">3500000</option>
                                        <option value="4000000">4000000</option>
                                        <option value="4500000">4500000</option>
                                        <option value="5000000">5000000</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Nama File  :</label>
                                <input type="text" name="nama" id="name" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Pilih File  :</label>
                                <input type="file" name="file" id="name" required/>
                            </div>
                        </div>
                        <p>Upload file Anda dengan melengkapi form di bawah ini. 
            File yang bisa di Upload hanya file dengan ekstensi <b>.doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .zip</b> dan besar file (file size) maksimal hanya 1 MB.</p>
 

                        <div class="form-submit">
                            <input type="submit" value="Upload" class="submit" name="upload" id="submit" />
                        </div>
                        <button class="login100-form-btn">
						<a href="/projek/index-user.php"> Back</a>
					</button>
                        </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>