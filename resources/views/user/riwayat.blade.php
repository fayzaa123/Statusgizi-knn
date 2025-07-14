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
    <title>Status Gizi Balita - KNN</title>

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
              <!-- Kolom Kiri: Profile + Grafik -->
              <div class="col-xxl-6 col-lg-8 col-md-12">
                <!-- Profile Card -->
                <div class="card social-profile mb-4">
                  <div class="card-body">
                    <div class="social-details">
                      <h5 class="mb-1"><a href="user-profile.html">{{ $balita->nama_balita }}</a></h5>
                      <span class="c-o-light">{{ $balita->jenis_kelamin }}</span>
                      <ul class="social-follow">
                        <li><h5 class="mb-0">12</h5><span class="c-o-light">Usia</span></li>
                        @if($terbaru)
                        <li><h5 class="mb-0">{{ $terbaru->berat }}</h5><span class="c-o-light">Berat</span></li>
                        <li><h5 class="mb-0">{{ $terbaru->tinggi }}</h5><span class="c-o-light">Tinggi</span></li>
                        @endif
                      </ul>
                    </div>
                    @if($terbaru)
                    <div class="social-img-wrap">
                      <div class="card-header-right-btn d-flex justify-content-center">
                        <a class="btn btn-success">{{ $terbaru->status_gizi }}</a>
                      </div>
                    </div>
                    @endif
                  </div>
                </div>

                <!-- Grafik Card -->
                <div class="card">
                  <div class="card-header">
                    <h5>Grafik Riwayat Pengukuran</h5>
                    <ul class="nav nav-tabs card-header-tabs" id="chartTabs" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tinggi-tab" data-bs-toggle="tab" data-bs-target="#tinggi-chart" type="button" role="tab" aria-controls="tinggi-chart" aria-selected="true">Tinggi Badan</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="berat-tab" data-bs-toggle="tab" data-bs-target="#berat-chart" type="button" role="tab" aria-controls="berat-chart" aria-selected="false">Berat Badan</button>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content" id="chartTabsContent">
                      <div class="tab-pane fade show active" id="tinggi-chart" role="tabpanel" aria-labelledby="tinggi-tab">
                        <div id="tinggi-chart-container"></div>
                      </div>
                      <div class="tab-pane fade" id="berat-chart" role="tabpanel" aria-labelledby="berat-tab">
                        <div id="berat-chart-container"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Kolom Kanan: Tabel Riwayat -->
              <div class="col-xxl-6 col-lg-4 col-md-12">
                <div class="card heading-space">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5>Riwayat Pengukuran</h5>
                      <div class="card-header-right-icon">
                        <div class="dropdown icon-dropdown">
                          <button class="btn dropdown-toggle" id="allProjects" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="allProjects">
                            <a class="dropdown-item" href="#!">This Month</a>
                            <a class="dropdown-item" href="#!">Previous Month</a>
                            <a class="dropdown-item" href="#!">Last 3 Months</a>
                            <a class="dropdown-item" href="#!">Last 6 Months</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-0 all-project-table">
                    <div class="recent-table table-responsive custom-scrollbar">
                      <table class="table" id="all-project-table">
                        <thead>
                          <tr>
                            <th></th>
                            <th>No</th>
                            <th>Tanggal Ukur</th>
                            <th>Usia</th>
                            <th>Berat</th>
                            <th>Tinggi</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse($balita->history as $riwayat)
                          <tr class="inbox-data">
                            <td></td>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $riwayat->tanggal_ukur->format('d-m-Y') }}</td>
                            <td>12</td>
                            <td>{{ $riwayat->berat }} kg</td>
                            <td>{{ $riwayat->tinggi }} cm</td>
                            <td>{{ $riwayat->status_gizi }}</td>
                          </tr>
                          @empty
                          <tr>
                            <td colspan="7" class="text-center">Belum ada data riwayat</td>
                          </tr>
                          @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>

        <!-- footer start-->
        <footer class="footer" style="margin-left: 0;">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const historyData = {!! json_encode($balita->history->map(function($item) {
                return [
                    'tanggal' => $item->tanggal_ukur->format('Y-m-d'),
                    'tinggi' => (float)$item->tinggi,
                    'berat' => (float)$item->berat
                ];
            })) !!};

            // Tahun ini
            const year = new Date().getFullYear();
            const xMin = new Date(`${year}-01-01`).getTime();
            const xMax = new Date(`${year}-12-31`).getTime();

            // Grafik Tinggi
            const tinggiChart = new ApexCharts(document.querySelector("#tinggi-chart-container"), {
                series: [{
                    name: 'Tinggi Badan',
                    data: historyData.map(item => [new Date(item.tanggal).getTime(), item.tinggi])
                }],
                chart: {
                    type: 'line',
                    height: 350
                },
                xaxis: {
                    type: 'datetime',
                    min: xMin,
                    max: xMax,
                    title: { text: 'Tanggal Ukur' }
                },
                yaxis: {
                    title: { text: 'Tinggi (cm)' }
                },
                colors: ['#28a745']
            });

            // Grafik Berat
            const beratChart = new ApexCharts(document.querySelector("#berat-chart-container"), {
                series: [{
                    name: 'Berat Badan',
                    data: historyData.map(item => [new Date(item.tanggal).getTime(), item.berat])
                }],
                chart: {
                    type: 'line',
                    height: 350
                },
                xaxis: {
                    type: 'datetime',
                    min: xMin,
                    max: xMax,
                    title: { text: 'Tanggal Ukur' }
                },
                yaxis: {
                    title: { text: 'Berat (kg)' }
                },
                colors: ['#007bff']
            });

            tinggiChart.render();
            beratChart.render();
        });
        </script>



  </body>
</html>
