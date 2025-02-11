<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <title>Status Gizi Balita - KNN</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
    <!-- Ico-font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <!-- Feather icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
    <!-- Plugins CSS Start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/select.bootstrap5.css') }}">
    <!-- Plugins CSS Ends -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('css/color-1.css') }}" media="screen">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    </head>

  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index"> <span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

      <!-- Page Header Start-->
        @include('component.navbar')
      <!-- Page Header Ends -->

      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        
              <!-- Page Sidebar Start-->
                @include('component.sidebar-admin')
              <!-- Page Sidebar Ends-->
      
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Dashboard</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin.dashboard-admin') }}">                                       
                        <svg class="stroke-icon">
                          <use href="{{ asset('svg/icon-sprite.svg#stroke-home') }}"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item active"> Dashboard </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>

          <!-- Container-fluid starts-->
          <div class="row">
            <!-- Baris pertama: Halo Admin, 1 kolom penuh -->
            <div class="col-12">
              <div class="card o-hidden welcome-card">            
                <div class="card-body">
                  <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22">
                    Halo Admin
                    <span>
                      <img src="{{ asset('images/dashboard-3/hand.svg') }}" alt="hand vector">
                    </span>
                  </h4>
                  <p>Kelola data balita dengan mudah. Pastikan semua data tersimpan dengan baik untuk mendukung sistem status gizi.</p>
                </div>
                <img class="welcome-img" src="{{ asset('images/dashboard-3/widget.svg') }}" alt="search image">
              </div>
            </div>
          </div>
          
          <div class="row">
            <!-- Baris kedua: 3 kolom -->
            <!-- Kolom 1: Dataset -->
            <div class="col-xxl-4 col-xl-4 col-md-4">
              <div class="card course-box"> 
                <div class="card-body"> 
                  <div class="course-widget"> 
                    <div class="course-icon warning"> 
                      <svg class="fill-icon">
                        <use href="{{ asset('svg/icon-sprite.svg#course-2') }}"></use>
                      </svg>
                    </div>
                    <div> 
                      <h4 class="mb-0"> 
                        <span class="counter" data-target="80">0</span>+
                      </h4>
                      <span class="f-light">Dataset</span>
                      <a class="btn btn-light f-light" href="{{ url('admin/dataset') }}">
                        Lihat Dataset
                        <span class="ms-2"> 
                          <svg class="fill-icon f-light">
                            <use href="{{ asset('svg/icon-sprite.svg#arrowright') }}"></use>
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <!-- Kolom 2: Data User -->
            <div class="col-xxl-4 col-xl-4 col-md-4">
              <div class="card course-box"> 
                <div class="card-body"> 
                  <div class="course-widget"> 
                    <div class="course-icon"> 
                      <svg class="fill-icon">
                        <use href="{{ asset('svg/icon-sprite.svg#course-1') }}"></use>
                      </svg>
                    </div>
                    <div> 
                      <h4 class="mb-0"> 
                        <span class="counter" data-target="100">0</span>+
                      </h4>
                      <span class="f-light">Data User</span>
                      <a class="btn btn-light f-light" href="{{ url('admin/datauser') }}">
                        Lihat Data User
                        <span class="ms-2"> 
                          <svg class="fill-icon f-light">
                            <use href="{{ asset('svg/icon-sprite.svg#arrowright') }}"></use>
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <!-- Kolom 3: Kalender 
            <div class="col-xxl-4 col-xl-4 col-md-4">
              <div class="card course-box"> 
                <div class="card-body"> 
                  <div class="course-widget"> 
                    <div class="card get-card overflow-hidden"> 
                      <div class="card default-inline-calender"> 
                        <h5>Kalender</h5>
                      </div>
                      <div class="card-body pt-0">
                        <div class="input-group main-inline-calender">
                          <input class="form-control" id="inline-calender1" type="date">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->
          </div>
          
        </div>
        <!-- Container-fluid Ends-->
    </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright <span class="year-update"> </span> © fayzamartadevia  </p>
              </div>
            </div>
          </div>
        </footer>
    </div>
    <!-- Latest jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- Feather icon js -->
    <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Scrollbar js -->
    <script src="{{ asset('js/scrollbar/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jQuery -->
    <script src="{{ asset('js/config.js') }}"></script>
    <!-- Plugins JS Start -->
    <script src="{{ asset('js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick/slick.js') }}"></script>
    <script src="{{ asset('js/header-slick.js') }}"></script>
    <script src="{{ asset('js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('js/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/dashboard_12.js') }}"></script>
    <script src="{{ asset('js/height-equal.js') }}"></script>
    <script src="{{ asset('js/tooltip-init.js') }}"></script>
    <!-- Plugins JS Ends -->
    <!-- Theme js -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script1.js') }}"></script>
    <script src="{{ asset('js/theme-customizer/customizer.js') }}"></script>
  </body>
</html>