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
  <link href="/PROJEK/FORM LOGIN/ADMIN/img/favicon.png" rel="icon">
  <link href="/PROJEK/FORM LOGIN/ADMIN/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="/PROJEK/FORM LOGIN/ADMIN/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="/PROJEK/FORM LOGIN/ADMIN/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="/PROJEK/FORM LOGIN/ADMIN/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="/PROJEK/FORM LOGIN/ADMIN/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="/PROJEK/FORM LOGIN/ADMIN/css/style.css" rel="stylesheet">
  <link href="/PROJEK/FORM LOGIN/ADMIN/css/style-responsive.css" rel="stylesheet">
  <script src="/PROJEK/FORM LOGIN/ADMIN/lib/chart-master/Chart.js"></script>

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
      <a href="/PROJEK/FORM LOGIN/ADMIN/index.php" class="logo"><b>SIS<span>KEU</span></b></a>
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
              <li><a href="/PROJEK/FORM LOGIN/akun-pengguna.php">User</a></li>
       
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Data Data</span>
              </a>
            <ul class="sub">
            <li><a href="/projek/data/mahasiswa/index.php">Mahasiswa</a></li>
              <li><a href="/projek/data/mahasiswa/index.php">Dosen</a></li>
            </ul>
          </li>
          <li class="sub-menu">
          <a href="/PROJEK/ukt-user/index copy.php">  
 
              <i class="fa fa-book"></i>
              <span>Validasi UKT</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="/Projek/sppd-user/index copy.php">
              <i class="fa fa-tasks"></i>
              <span>SPPD</span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="/projek/Form RAB/index.php">
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
      <div class="row mt">
      <h2></i>RAB</h2>
            <hr>
            <a href="input.php" class="btn btn-info"><i class="fa fa-plus"></i> Input Data</a>
            <br><br>
            <table class="table table-striped table-bordered table-hover" id="tb-mahasiswa">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Unit Kerja</th>
                        <th>Tanggal Pelaksanaan</th>
                        <th>Nama File</th>
                        <th><center>Aksi</center> </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    require_once('koneksi.php');
                    $no = 1;

                    $koneksiObj = new Koneksi();
                    $koneksi = $koneksiObj->getKoneksi();

                    if($koneksi->connect_error){
                        echo "Gagal Koneksi : ". $koneksi->connect_error;
                        echo "</td></tr>";
                    }

                    $query = "select * from rab join unit_kerja where rab.id_unit_kerja=unit_kerja.id_unit_kerja";
                    $data = $koneksi->query($query);
                    if($data->num_rows <= 0){
                        echo "<tr>";
                        echo "<td colspan='5' class='text-center'><i>Tidak ada data</i></td>";
                        echo "</tr>";
                    } else{
                        while($row = $data->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>".$no++."</td>";
                            echo "<td>".$row['nama_unit_kerja']."</td>";
                            echo "<td>".$row['tanggal_pelaksanaan']."</td>";
                            echo "<td>".$row['nama_file']."</td>";
                            echo '<td class="text-center"><a href="form-edit.php?id_rab='.$row['id_rab'].'" class="btn btn-info btn-xs"><i class="fa fa-pencil">edit</i></a>';
                            echo ' <a href="hapus.php?id_rab='.$row['id_rab'].'" class="btn btn-danger btn-xs"><i class="fa fa-trash">hapus</i></a></td>';
                            echo "</tr>";
                        }
                    }
                ?>
                </tbody>
        </div>
      </section>
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
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
