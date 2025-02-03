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
                @include('component.sidebar-user')
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
                    <li class="breadcrumb-item"><a href="{{ url('admin.dashboard') }}">                                       
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
          <div class="container-fluid default-dashboard">
              <div class="row widget-grid">
                  <div class="col-sm-12"> 
                      <div class="card profile-box">
                          <div class="card-body">
                              <div class="d-flex media-wrapper justify-content-between">
                                  <div class="flex-grow-1"> 
                                      <div class="greeting-user">
                                          <h2 class="f-w-600">Welcome Emay Walter!</h2>
                                          <p>Here what’s happening in your account today</p>
                                          <div class="whatsnew-btn">
                                              <a class="btn btn-outline-white" href="{{ url('profile') }}" target="_blank">View Profile</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div>  
                                      <div class="clockbox">
                                          <svg id="clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                                              <g id="face">
                                                  <circle class="circle" cx="300" cy="300" r="253.9"></circle>
                                                  <path class="hour-marks" d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6"></path>
                                                  <circle class="mid-circle" cx="300" cy="300" r="16.2"></circle>
                                              </g>
                                              <g id="hour">
                                                  <path class="hour-hand" d="M300.5 298V142"></path>
                                                  <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                                              </g>
                                              <g id="minute">
                                                  <path class="minute-hand" d="M300.5 298V67"></path>
                                                  <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                                              </g>
                                              <g id="second">
                                                  <path class="second-hand" d="M300.5 350V55"></path>
                                                  <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                                              </g>
                                          </svg>
                                      </div>
                                      <div class="badge f-10 p-0" id="txt"></div>
                                  </div>
                              </div>
                              <div class="cartoon">
                                  <img class="img-fluid" src="{{ asset('images/dashboard/cartoon.svg') }}" alt="vector woman with laptop">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header">
                          <h5>Cek Status Gizi Balita</h5>
                          <p class="f-m-light mt-1">Ayo kenali tumbuh kembang anak!</p>
                        </div>
                        <div class="card-body">
                          <p><strong>Status Gizi Balita: </strong> Sistem ini memudahkan Anda untuk mengetahui status gizi balita. Dari hasil yang ditampilkan, Anda juga akan mendapatkan rekomendasi langkah-langkah yang bisa dilakukan untuk mendukung pertumbuhan si kecil dan mencegah risiko stunting.</p>
                          <p><strong>Teknologi yang Membantu Anda: </strong> Masukkan data balita Anda, dan sistem akan memberikan hasil status gizi, seperti "Normal", "Kurang Gizi", atau "Gizi Buruk". Tak hanya itu, sistem juga memberikan rekomendasi khusus yang mudah dipahami untuk mendukung kesehatan si kecil.</p>
                          <p><strong>Mudah dan Nyaman untuk Semua: </strong>Tampilan sistem dirancang sederhana dan ramah untuk semua pengguna. Warna dan desainnya dibuat nyaman, sehingga siapa saja dapat menggunakannya dengan mudah, bahkan bagi pengguna dengan keterbatasan.</p>
                        </div>
                      </div>
                    </div>
                  </div>          
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