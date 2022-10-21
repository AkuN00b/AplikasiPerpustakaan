<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aplikasi Perpustakaan</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <?php
    function jumlahBuku()
    {
      include 'koneksi.php';
      $no = 0;
      $data = mysqli_query($koneksi, "SELECT * FROM buku");

      while($d = mysqli_fetch_array($data)) {
        $no++;
      }

      echo $no;
    }
  ?>

  <?php
    function jumlahJenisBuku()
    {
      include 'koneksi.php';
      $no = 0;
      $data = mysqli_query($koneksi, "SELECT * FROM jenis_buku");

      while($d = mysqli_fetch_array($data)) {
        $no++;
      }

      echo $no;
    }
  ?>

  <?php
    function jumlahVendor()
    {
      include 'koneksi.php';
      $no = 0;
      $data = mysqli_query($koneksi, "SELECT * FROM vendor");

      while($d = mysqli_fetch_array($data)) {
        $no++;
      }

      echo $no;
    }
  ?>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.php">
            <img src="images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Hello, <span class="text-black fw-bold">Admin</span></h1>
          </li>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Master Data</li>
          <li class="nav-item">
            <a class="nav-link" href="buku/buku.php">
              <i class="mdi mdi-book menu-icon"></i>
              <span class="menu-title">Buku</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jenisBuku/jenisBuku.php">
              <i class="mdi mdi-shape menu-icon"></i>
              <span class="menu-title">Jenis Buku</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vendor/vendor.php">
              <i class="mdi mdi-set-none menu-icon"></i>
              <span class="menu-title">Vendor</span>
            </a>
          </li>
        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Data Buku</p>
                            <h3 class="rate-percentage"><?php echo jumlahBuku() ?></h3>
                          </div>
                          <div>
                            <p class="statistics-title">Data Jenis Buku</p>
                            <h3 class="rate-percentage"><?php echo jumlahJenisBuku() ?></h3>
                          </div>
                          <div>
                            <p class="statistics-title">Data Vendor</p>
                            <h3 class="rate-percentage"><?php echo jumlahVendor() ?></h3>
                          </div>
                        </div>
                      </div>
                    </div> 

                    <div class="row justify-content-center">
                      <div class="col-lg-9 col-md-12 col-sm-12 mt-1">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                          </div>

                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="https://wallpaperaccess.com/full/253332.jpg" class="d-block w-100 h-50" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="https://images6.alphacoders.com/306/306638.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="https://images.wallpaperscraft.com/image/single/library_style_table_books_wooden_39317_1920x1080.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="https://theteethbeneath.files.wordpress.com/2015/02/beautiful-library-wallpaper-44313-45432-hd-wallpapers.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="https://cf-images.us-east-1.prod.boltdns.net/v1/static/3281700261001/695c379f-2c5d-462c-bb75-c59ab1d7ef8d/aed1aca1-2dd5-40b2-bdf3-c7c2101601e4/1920x1080/match/image.jpg" class="d-block w-100" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

