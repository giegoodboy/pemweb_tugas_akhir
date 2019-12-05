
<!DOCTYPE html>
<html>
  
<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 13:36:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Pendaftaran KOLU</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="cssdas/dasboard/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="cssdas/dasboard/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="cssdas/dasboard/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="cssdas/dasboard/css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="cssdas/dasboard/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="admin" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Dashboard  Pendaftaran </span><strong> KOLU</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <!-- Messages                        -->


                <!-- Logout    -->
                <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center"><a href="pages-profile.html">
              </a>
            <div class="title">
              <h1 class="h4">Sistem Pengajuan</h1>
              <p>Divisi web Team</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">MENU</span>
          <ul class="list-unstyled">
            <li class=""><a href="tabeluser.php"> <i><img src="cssdas/dasboard/icon/home.png"></i>List Seminar </a></li>
            <!-- <li class=""><a href=""> <i><img src="public/dasboard/icon/accspv.png"></i>ACC Pengajuan </a></li> -->
            <li class=""><a href="viewimage.php"> <i><img src="cssdas/dasboard/icon/accspv.png"></i>List Member </a></li>
            <li><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="cssdas/dasboard/icon/history.png"></i>History Data</a>
              <ul id="tablesDropdown" class="collapse list-unstyled ">
                <li><a href="#">Pengurus inti Komunitas</a></li>
                <li><a href="#">Pengurus Komunitas</a></li>
                <li ><a class="active" href="dataall.php">Semua Data Masuk</a></li>
              </ul>
            </li>
            <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="cssdas/dasboard/icon/rangking.png"></i>Ranking</a>
              <ul id="chartsDropdown" class="collapse list-unstyled ">
                <li><a href="#">Pengurutan Nilai Activitas Anggota</a></li>
                <li><a href="#">Aturan Yang Berlaku</a></li>
              </ul>
            </li>
            <!-- <li><a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="public/dasboard/icon/form.png"></i>Pengajuan</a>
              <ul id="formsDropdown" class="collapse list-unstyled ">
                <li><a href="#">Form Pengajuan</a></li>
                <li><a href="forms-advanced.html">Ketentuan Pengajuan</a></li>
              </ul>
            </li> -->
            </li>
            <li><a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="cssdas/dasboard/icon/dasboard.png"></i>Information</a>
              <ul id="pagesDropdown" class="collapse list-unstyled ">
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Invoice</a></li>
              </ul>
            </li>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <!-- Dashboard Header Section    -->
 <?php
    include "connectdb.php";

    $Cari="SELECT id FROM admin";
    $Tampil = mysqli_query($koneksi,$Cari);
    $hasil = mysqli_num_rows($Tampil);

    $baru="SELECT id FROM Pendaftaran";
    $index = mysqli_query($koneksi,$baru);
    $new = mysqli_num_rows($index);
?>
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>Total<br>Anggota</span>
                      <div class="progress">
                        <div  style="width: 25%; height: 4px;" ></div>
                      </div>
                    </div>
                    <div class="number"><strong></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Anggota baru</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?=$new?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>Pemegang Admin</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?=$hasil?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Jumlah divisi</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong>4</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    <!-- JavaScript files-->
    <script src="cssdas/dasboard/vendor/jquery/jquery.min.js"></script>
    <script src="cssdas/dasboard/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="cssdas/dasboard/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="cssdas/dasboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="cssdas/dasboard/vendor/chart.js/Chart.min.js"></script>
    <script src="cssdas/dasboard/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="cssdas/dasboard/js/charts-home.js"></script>
    <!-- Notifications-->
    <script src="cssdas/dasboard/vendor/messenger-hubspot/build/js/messenger.min.js">   </script>
    <script src="cssdas/dasboard/vendor/messenger-hubspot/build/js/messenger-theme-flat.js">       </script>
    <script src="cssdas/dasboard/js/home-premium.js"> </script>
    <!-- Main File-->
    <script src="cssdas/dasboard/js/front.js"></script>
  </body>

<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 13:36:27 GMT -->
</html>