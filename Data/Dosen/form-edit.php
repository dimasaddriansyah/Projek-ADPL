<?php
        require_once('koneksi.php');

        if($_GET['nidn']!=null){
            $nidn = $_GET['nidn'];

            $koneksiObj = new Koneksi();
            $koneksi = $koneksiObj->getKoneksi();

            if($koneksi->connect_error){
                echo "Gagal Koneksi : ". $koneksi->connect_error;
            }

            $query = "select * from dosen where nidn=$nidn";
            $data = $koneksi->query($query);

        }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Siskeu - Admin Page</title>

  <!-- Favicons -->
  <link href="/PROJEK/Form Login/admin/img/favicon.png" rel="icon">
  <link href="/PROJEK/Form Login/admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="/PROJEK/Form Login/admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="/PROJEK/Form Login/admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="/PROJEK/Form Login/admin/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="/PROJEK/Form Login/admin/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="/PROJEK/Form Login/admin/css/style.css" rel="stylesheet">
  <link href="/PROJEK/Form Login/admin/css/style-responsive.css" rel="stylesheet">
  <script src="/PROJEK/Form Login/admin/lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
    <?php
        if($data->num_rows <= 0){
            echo "Data tidak ditemukan";
        } else{
            while($row = $data->fetch_assoc()){
              $nidn               = $row['nidn'];
              $nip                = $row['nip'];
              $nama               = $row['nama'];
              $ttl                = $row['ttl'];
              $jenis_kelamin      = $row['jenis_kelamin'];
              $pangkat            = $row['pangkat'];
              $jabatan            = $row['jabatan'];
              $alamat             = $row['alamat'];
              $no_hp              = $row['no_hp'];
              $email              = $row['email'];
            }
        }
    ?>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="/projek/form login/admin/index.php" class="logo"><b>SIS<span>KEU</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="/projek/form login/index.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="/Projek/images/POLINDRA.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>
        <li class="mt">
            <a href="/PROJEK/FORM LOGIN/ADMIN/index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Akun Pengguna</span>
              </a>
            <ul class="sub">
              <li><a href="/PROJEK/FORM LOGIN/admin/akun-pengguna.php">User</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="active">
              <i class="fa fa-cogs"></i>
              <span>Data Data</span>
              </a>
            <ul class="sub">
              <li><a href="/projek/data/mahasiswa/index.php">Mahasiswa</a></li>
              <li class="active"><a href="/projek/data/mahasiswa/index.php">Dosen</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="/PROJEK/ukt-user/index copy.php">  
              <i class="fa fa-book"></i>
              <span>Validasi UKT</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" href="/projek/Form SPPD/Form SPPD.php">
              <i class="fa fa-tasks"></i>
              <span>SPPD</span>
              </a>
          </li>
          <li class="sub-menu">
          <a  href="/Projek/rab-user/index copy.php">

              <i class="fa fa-th"></i>
              <span>Pengajuan RAB</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
<!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
      <div class="row">
        <div class="container">
        <h2><i class="fa fa-pencil"></i> Edit Data</h2>
        <hr>
        <form class="form-horizontal" method="post" action="update.php">
        


        <div class="form-group">
                <label for="nim" class="col-sm-2 control-label">NIDN</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="nidn" name="nidn" placeholder="Masukan nidn" value="<?php echo $_GET['nidn'];?>" readonly>
                </div>
            </div>

            
            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">NIP</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan nip" value="<?php echo $nip;?>" readonly >
                </div>
            </div>
            
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" value="<?php echo $nama;?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Tempat, Tanggal Lahir</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Masukan Tempat, Tanggal Lahir" value="<?php echo $ttl;?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-4">
                <input type="radio"  name="jenis_kelamin" value="Laki - Laki" <?php if($jenis_kelamin=='Laki - Laki'){echo 'checked';}?>>Laki - Laki
                <input type="radio"  name="jenis_kelamin" value="Perempuan" <?php if($jenis_kelamin=='Perempuan'){echo 'checked';}?>>Perempuan
                </div>
            </div>
            
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Pangkat</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="pangkat" name="pangkat" placeholder="Masukan Pangkat" value="<?php echo $pangkat;?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Jabatan</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukan Jabatan" value="<?php echo $jabatan;?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" value="<?php echo $alamat;?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">No Hp</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan No Hp" value="<?php echo $no_hp;?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email" value="<?php echo $email;?>" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </div>
            </form>
        </div>
    </div>
      </section>
    </section>
    <script src="/PROJEK/FORM LOGIN/ADMIN/lib/jquery/jquery.min.js"></script>

<script src="/PROJEK/FORM LOGIN/ADMIN/lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="/PROJEK/FORM LOGIN/ADMIN/lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="/PROJEK/FORM LOGIN/ADMIN/lib/jquery.scrollTo.min.js"></script>
<script src="/PROJEK/FORM LOGIN/ADMIN/lib/jquery.nicescroll.js" type="text/javascript"></script>
<!--common script for all pages-->
<script src="/PROJEK/FORM LOGIN/ADMIN/lib/common-scripts.js"></script>
<!--script for this page-->
<script type="text/javascript" src="/PROJEK/FORM LOGIN/ADMIN/lib/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="/PROJEK/FORM LOGIN/ADMIN/lib/gritter-conf.js"></script>
</body>
</html>

