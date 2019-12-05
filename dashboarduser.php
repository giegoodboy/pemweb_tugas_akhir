
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
                <!-- Navbar Brand --><a href="dashboarduser.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Dashboard  Pendaftaran </span><strong> KLU </strong></div>
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
              <h1 class="h4">Sistem Pendataan</h1>
              <p>Komunitas Linux UPNV JATIM </p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">MENU</span>
          <ul class="list-unstyled">
            <li class=""><a href="dasboarduser/status.php"> <i><img src="cssdas/dasboard/icon/home.png"></i>Publis Pendaftaran </a></li>
            <li class=""><a href="dasboarduser/biodatapendaftaran.php"> <i><img src="cssdas/dasboard/icon/accspv.png"></i>Biodata Pendaftaran</a></li>

            <li><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="cssdas/dasboard/icon/history.png"></i>List Data Pendaftaran</a>
              <ul id="tablesDropdown" class="collapse list-unstyled ">
                <li><a href="dasboarduser/tahunan.php">Pendaftaran Pertahun</a></li>
                <li ><a class="active" href="dasboarduser/semuadatabackup.php">Semua Data Backup</a></li>
              </ul>
            </li>

              <li><a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="cssdas/dasboard/icon/history.png"></i>Data Anggota Devisi</a>
              <ul id="formsDropdown" class="collapse list-unstyled ">
                <li><a href="dasboarduser/devisiweb.php">Daftar devisi Web</a></li>
                <li><a href="dasboarduser/devisijaringan.php">Daftar devisi Jaringan</a></li>
                <li><a href="dasboarduser/devisidos.php">Daftar devisi Dos</a></li>
                <li><a href="dasboarduser/devisidistro.php">Daftar devisi Distro</a></li>
                <li><a href="dasboarduser/devisiall.php">Daftar Backup semua Devisi</a></li>
              </ul>
            </li>
            </li>

            <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="cssdas/dasboard/icon/rangking.png"></i>Komentar</a>
              <ul id="chartsDropdown" class="collapse list-unstyled ">
                <li><a href="dasboarduser/komentar.php">Tampilkan Komentar</a></li>
                <li><a href="#">lain-lain</a></li>
              </ul>
            </li>

                      <li><a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="cssdas/dasboard/icon/dasboard.png"></i>Tampilan Web</a>
              <ul id="pagesDropdown" class="collapse list-unstyled ">
                <li><a href="dasboarduser/post.php">Tambah Post</a></li>
                <li><a href="#">lain-lain</a></li>
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

    $Cari="SELECT id_admin FROM administrator";
    $Tampil = $link->query($Cari);
    $hasil = $Tampil->rowCount()  ;

    $baru="SELECT nama FROM Pendaftaran_baru";
    $index = $link->query($baru);
    $new = $index->rowCount();

    $baru1="SELECT nama FROM register where approve='1'";
    $index1 = $link->query($baru1);
    $new1 = $index1->rowCount();

    $baru2="SELECT id_komen FROM komentar ";
    $index2 = $link->query($baru2);
    $new2 = $index2->rowCount();

    $baru3="SELECT nama FROM register where approve='0'";
    $index3 = $link->query($baru3);
    $new3 = $index3->rowCount();

    $baru4="SELECT npm_anggota FROM data_devisi";
    $index4 = $link->query($baru4);
    $new4 = $index4->rowCount();

    $baru5="SELECT id_post FROM post";
    $index5 = $link->query($baru5);
    $new5 = $index5->rowCount();



?>
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>Total<br>Pengurus Web</span>
                      <div class="progress">
                        <div  srole="progressbar"  style="width: 100%; height: 4px;" class="progress-bar bg-violet" ></div>
                      </div>
                    </div>
                    <div class="number"><strong><?=$new1?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Anggota baru</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
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
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
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

                 <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>Total<br>Komentar Masuk</span>
                      <div class="progress">
                        <div role="progressbar"  style="width: 100%; height: 4px;" class="progress-bar bg-violet" ></div>
                      </div>
                    </div>
                    <div class="number"><strong><?=$new2?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Permintaan Acc Pengurus</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?=$new3?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><a href="insertpost.php"><span>Jumlah Post</span></a>
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?=$new5?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>jumlah Regis ulang Devisi</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?=$new4?></strong></div>
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