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
      <a href="/projek/Form Login/admin/index.php" class="logo"><b>SIS<span>KEU</span></b></a>
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
              <li><a href="/PROJEK/FORM LOGIN/admin/akun-pengguna.php">User</a></li>
         
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Data Data</span>
              </a>
            <ul class="sub">
            <li><a href="/projek/data/mahasiswa/index.php">Mahasiswa</a></li>
              <li><a href="/projek/data/dosen/index.php">Dosen</a></li>
           
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
            <a class="active" href="/projek/form RAB/index.php">
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
        <h2><i class="fa fa-plus"></i> Tambah Data</h2>
        <hr>
        <form id="inputmahasiswa" class="form-horizontal" method="post" action="simpan.php">

        <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama Unit Kerja</label>
                <div class="col-sm-4">
                <select name="id_unit_kerja" id="id_unit_kerja" class="form-control" >
                <option value="">Pilih</option>
                <?php
                    $konek = mysqli_connect("localhost","root","","akademik");
                    $query = "select * from unit_kerja";
                    $hasil = mysqli_query($konek,$query);
                    while($data = mysqli_fetch_array($hasil)){
                    echo "<option value=$data[id_unit_kerja]>$data[nama_unit_kerja]</option>";
                    }
                  ?>
                </select>
                </div>
            </div>

            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Tanggal Pelaksanaan</label>
                <div class="col-sm-4">
                <input type="date" class="form-control" id="tanggal_pelaksanaan" name="tanggal_pelaksanaan" placeholder="Masukan tanggal_pelaksanaan">
                </div>
            </div>
            
            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama File</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="nama_file" name="nama_file" placeholder="Masukan nama_file">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-info">Tambah</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    
      </section>
    </section>
</body>
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
<script>
    $(document).ready(function(){
        $("#nama").keyup(function(){
            $pattern = "[^a-zA-Z ]";
            if(preg_match($pattern,$string)) {
                alert("gagal");
            } else {
                alert("berhasil");
            }
        });

        $.validator.addMethod("alpha", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
        });

        $("#inputmahasiswa").validate({
            rules: {
                username: "required",
                nama: {
                    required: true,
                    alpha: true
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                username: "Masukan username",
                nama: {
                    required: "Masukan nama",
                    alpha: "*haya masukan huruf dan spasi"
                },
                email: "*masukan email secara benar",
                password: {
                    required: "Masukan password",
                    minlength: "*password minimal 6 karakter!"
                }
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
</html>
