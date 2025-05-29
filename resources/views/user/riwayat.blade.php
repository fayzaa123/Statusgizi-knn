<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Title -->
    <title>User Cards | Cuba - Premium Admin Template By Pixelstrap</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">

    <!-- Icon Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/scrollbar.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">

    <!-- Main App CSS -->
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
      <!-- Page Header Ends                              -->
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
                  <h3>Riwayat Pengukuran</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('user.riwayat') }}">                                       
                        <svg class="stroke-icon">
                          <use href="{{ asset('svg/icon-sprite.svg#stroke-home') }}"></use>
                        </svg></a></li>
                    
                    <li class="breadcrumb-item active">Riwayat Pengukuran</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid social-user-cards">
            <div class="row">
              <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                  <div class="card-body">
                    
                    <div class="social-details">
                      <h5 class="mb-1"><a href="user-profile.html">Fayza MD</a></h5><span class="c-o-light">perempuan</span>
                      
                      <ul class="social-follow"> 
                        <li>
                          <h5 class="mb-0">12</h5><span class="c-o-light">Usia</span>
                        </li>
                        <li>
                          <h5 class="mb-0">34.0k</h5><span class="c-o-light">Berat</span>
                        </li>
                        <li>
                          <h5 class="mb-0">897</h5><span class="c-o-light">Tinggi</span>
                        </li>
                      </ul>
                    </div>

                    <div class="social-img-wrap"> 
                        <div class="card-header-right-btn d-flex justify-content-center">
                            <a class="btn btn-success">
                                Gizi Baik
                            </a>
                        </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-xxl-7 box-col-12"> 
                <div class="card heading-space">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5>Riwayat Pengukuran</h5>
                      <div class="card-header-right-icon">
                        <div class="dropdown icon-dropdown">
                          <button class="btn dropdown-toggle" id="allProjects" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="allProjects"><a class="dropdown-item" href="#!">This Month</a><a class="dropdown-item" href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last 3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-0 all-project-table">
                    <div class="recent-table table-responsive custom-scrollbar">
                      <table class="table" id="all-project-table">
                        <thead> 
                          <tr>
                            <th> </th>
                            <th>No</th>
                            <th>Tanggal Ukur</th>
                            <th>Usia</th>
                            <th>Berat</th>
                            <th>Tinggi</th>
                            <th>Status</th>
                            
                          </tr>
                        </thead>
                        <tbody> 
                          <tr class="inbox-data">
                            <td> </td>
                            <td> <a class="f-w-500" href="project-details.html">1</a></td>
                            
                            <td>20 jun, 2025</td>
                            <td>12</td>
                            <td>12</td>
                            <td>50</td>
                            
                            <td> <span class="badge badge-light-warning">Gizi kurang</span></td>
                          </tr>
                          <tr class="inbox-data">
                            <td> </td>
                            <td> <a class="f-w-500" href="project-details.html">1</a></td>
                            
                            <td>20 jun, 2025</td>
                            <td>12</td>
                            <td>12</td>
                            <td>50</td>
                            
                            <td> <span class="badge badge-light-danger">Gizi Buruk</span></td>
                          </tr>
                          <tr class="inbox-data">
                            <td> </td>
                            <td> <a class="f-w-500" href="project-details.html">1</a></td>
                            
                            <td>20 jun, 2025</td>
                            <td>12</td>
                            <td>12</td>
                            <td>50</td>
                            
                            <td> <span class="badge badge-light-warning">Gizi kurang</span></td>
                          </tr>
                          <tr class="inbox-data">
                            <td> </td>
                            <td> <a class="f-w-500" href="project-details.html">1</a></td>
                            
                            <td>20 jun, 2025</td>
                            <td>12</td>
                            <td>12</td>
                            <td>50</td>
                            
                            <td> <span class="badge badge-light-success">Gizi baik</span></td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Grafik Riwayat Pengukuran </h5>
                  </div>
                  <div class="card-body">
                    <div id="area-spaline"></div>
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
                <p class="mb-0">Copyright <span class="year-update"> </span> © Cuba Theme By Pixelstrap  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- Latest jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- Feather icon JS -->
    <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>

    <!-- Scrollbar JS -->
    <script src="{{ asset('js/scrollbar/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/scrollbar/custom.js') }}"></script>

    <!-- Sidebar jQuery -->
    <script src="{{ asset('js/config.js') }}"></script>

    <!-- Plugins JS start -->
    <script src="{{ asset('js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick/slick.js') }}"></script>
    <script src="{{ asset('js/header-slick.js') }}"></script>
    <script src="{{ asset('js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('js/chart/apex-chart/chart-custom.js') }}"></script>

    <!-- Plugins JS ends -->

    <!-- Theme JS -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script1.js') }}"></script>
    <script src="{{ asset('js/theme-customizer/customizer.js') }}"></script>
  </body>
</html>