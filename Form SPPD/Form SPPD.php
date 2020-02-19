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
          <li><a class="logout" href="/projek/Form Login/index.php">Logout</a></li>
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
            <a href="/projek/Form Login/admin/index.php">
             <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
	  <li class="sub-menu">
            <a href="/projek/Form Login/admin/akun-pengguna.php">
              <i class="fa fa-map-marker"></i>
              <span>Akun Pengguna</span>
              </a>
          </li>
          <li class="sub-menu">
            <a a href="/PROJEK/Form UKT/index.php">
              <i class="fa fa-tasks"></i>
              <span>Validasi UKT</span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="/projek/Form SPPD/Form SPPD.php">
              <i class="fa fa-envelope"></i>
              <span>Surat SPPD</span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="javascript:;" href="validasi.html">
              <i class="fa fa-book"></i>
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
        <h2>SPPD</h2>
        <hr>
        <form class="form-horizontal" method="post" action="update.php">

        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Pejabat Berwenang Yang Memberi Perintah</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="nama_pejabat" name="nama_pejabat" placeholder="Masukan nama" value="<?php echo $nama_pejabat;?>" required >
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama Pegawai Yang Diperintah</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Masukan nama" value="<?php echo $nama_pjbt;?>" required >
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Pangkat dan Golongan</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="pangkat" name="pangkat" placeholder="Masukan nama" value="<?php echo $nama_pjbt;?>" required >
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Jabatan / Instansi</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukan nama" value="<?php echo $nama_pjbt;?>" required >
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Tingkat Biaya Perjalanan Dinas</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="biaya" name="biaya" placeholder="Masukan nama" value="<?php echo $nama_pjbt;?>" required >
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Maksud Perjalanan Dinas</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="maksud_perjalanan" name="maksud_perjalanan" placeholder="Masukan nama" value="<?php echo $nama_pjbt;?>" required >
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Alat Angkutan Yang Dipergunakan</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="angkutan" name="angkutan" placeholder="Masukan nama" value="<?php echo $nama_pjbt;?>" required >
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Tempat Berangkat</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="berangkat" name="berangkat" placeholder="Masukan nama" value="<?php echo $nama_pjbt;?>" required >
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Tempat Tujuan</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Masukan nama" value="<?php echo $nama_pjbt;?>" required >
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Lamanya Perjalanan Dinas</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="lama_perjalanan" name="lama_perjalanan" placeholder="Masukan nama" value="<?php echo $nama_pjbt;?>" required >
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Tanggal Berangkat</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="tgl_berangkat" name="tgl_berangkat" placeholder="Masukan nama" value="<?php echo $nama_pjbt;?>" required >
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Tanggal Harus Kembali / Tiba Di Tempat Baru</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="tgl_kembali" name="tgl_kembali" placeholder="Masukan nama" value="<?php echo $nama_pjbt;?>" required >
            </div>
        </div>
                <tr>
                    <td>13. Pengikut : Nama </td>
                    <td></td>
                    <td>Tanggal Lahir</td>
                    <td></td>
                    <td>Keterangan</td>
                </tr>
                <tr>
                    <td>1. <input type="text" name="nama1" required></td>
                    <td>:</td>
                    <td><input type="date" name="tgl_lhr1" required></td>
                    <td></td>
                    <td><textarea name="ket1" cols="40" rows="2" required></textarea></td>
                </tr>
                <tr>
                    <td>2. <input type="text" name="nama2" required></td>
                    <td>:</td>
                    <td><input type="date" name="tgl_lhr2" required></td>
                    <td></td>
                    <td><textarea name="ket1" cols="40" rows="2" required></textarea></td>
                </tr>
                <tr>
                    <td>3. <input type="text" name="nama3" required></td>
                    <td>:</td>
                    <td><input type="date" name="tgl_lhr3" required></td>
                    <td></td>
                    <td><textarea name="ket1" cols="40" rows="2" required></textarea></td>
                </tr>
                <tr>
                    <td>4. <input type="text" name="nama4" required></td>
                    <td>:</td>
                    <td><input type="date" name="tgl_lhr4" required></td>
                    <td></td>
                    <td><textarea name="ket1" cols="40" rows="2" required></textarea></td>
                </tr>
                <tr>
                    <td>5. <input type="text" name="nama5" required></td>
                    <td>:</td>
                    <td><input type="date" name="tgl_lhr5" required></td>
                    <td></td>
                    <td><textarea name="ket1" cols="40" rows="2" required></textarea></td>
                </tr>
                <tr>
                    <td>14. Pembebanan Anggaran</td>    
                </tr>
                <tr>
                    <td>A. Instansi</td>
                    <td>:</td>
                    <td><input type="text" name="instansi" required></td>
                </tr>
                <tr>
                    <td>B. Mata Anggaran</td>
                    <td>:</td>
                    <td><input type="text" name="anggaran" required></td>
                </tr>
                <tr>
                    <td>15. Keterangan Lain - Lain</td>
                    <td>:</td>
                    <td><textarea name="keterangan" cols="30" rows="10" required></textarea></td>
                </tr>
                <tr>
                    <td>Upload Berkas Laporan Kegiatan</td>
                </tr>
                <tr>
                    <td><input type="file" name="foto" accept="file/*" required></td>
                </tr>
            </table>
            <center>
                <td>
                    <input type="submit" name="booking" value="Submit">
                    <input type="button" value="Back" onClick="history.go(-1);">
                </td>
            </center>
        </form>
      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="/PROJEK/Form Login/admin/lib/jquery/jquery.min.js"></script>

  <script src="/PROJEK/Form Login/admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="/PROJEK/Form Login/admin/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="/PROJEK/Form Login/admin/lib/jquery.scrollTo.min.js"></script>
  <script src="/PROJEK/Form Login/admin/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="/PROJEK/Form Login/admin/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="/PROJEK/Form Login/admin/lib/common-scripts.js"></script>
  <script type="text/javascript" src="/PROJEK/Form Login/admin/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="/PROJEK/Form Login/admin/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="/PROJEK/Form Login/admin/lib/sparkline-chart.js"></script>
  <script src="/PROJEK/Form Login/admin/lib/zabuto_calendar.js"></script>
</body>
</html>
