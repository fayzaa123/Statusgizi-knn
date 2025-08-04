<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <title>Status Gizi Balita - KNN</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/select.bootstrap5.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">

    <!-- App Styles -->
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
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper default-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('component.navbar')
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper default-menu default-menu">
            <!-- Page Sidebar Start-->
            @include('component.sidebar-user')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>
                                    Hasil</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('hitung.klasifikasi') }}">
                                            <svg class="stroke-icon">
                                                <use href="{{ asset('svg/icon-sprite.svg#stroke-home') }}"></use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item active">Hasil Hitung</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid main-scope-project">
                    <div class="row scope-bottom-wrapper">


                        <div class="row">

                            <div class="col-12">
                                <div class="tab-content" id="add-product-pills-tabContent">
                                    <div class="tab-pane fade show active" id="overview-project" role="tabpanel"
                                        aria-labelledby="overview-project-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card main-summary">
                                                    <div class="card-header card-no-border">
                                                        <div class="common-space">
                                                            <div class="left-header-content">
                                                                <h5>Hasil Status Gizi untuk id = {{$id}}</h5>
                                                            </div>
                                                            <div class="card-header-right-btn"><a class="c-o-light"
                                                                    href="{{ route('data.history') }}">Riwayat</a>
                                                            </div>
                                                            
                                                            <form action="{{ route('data.simpanriwayat') }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $id}}">
                                                                <input type="hidden" name="berat"
                                                                    value="{{ $berat }}">
                                                                <input type="hidden" name="tinggi"
                                                                    value="{{ $tinggi }}">
                                                                <input type="hidden" name="status_gizi"
                                                                    value="{{ $status_gizi }}">
                                                                <button type="submit"
                                                                    class="c-o-light btn btn-link p-0 m-0"
                                                                    style="text-decoration:underline;">Riwayat</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class="row">
                                                            <div class="col-xxl-8 box-col-12">
                                                                <ul class="summary-section">

                                                                    <li>
                                                                        <ul>
                                                                            <li>
                                                                                <p class="mb-1">Nilai K</p><span
                                                                                    class="badge badge-light-primary">{{ $k }}</span>
                                                                            </li>
                                                                            <li>
                                                                                <p class="mb-1">Status Gizi</p><span
                                                                                    class="badge badge-light-success">{{ $status_gizi }}</span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>

                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body linear-divider">
                                                        <h5>Hasil Rekomendasi Status Gizi</h5>
                                                        <div class="divider-h-line bg-primary"></div>
                                                        @foreach ($rekomendasi as $saran)
                                                            <li class="mb-0 c-light">{{ $saran }}</li>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>{{ $k }} Tetangga Terdekat</h5>

                                    </div>
                                    <div class="table-responsive custom-scrollbar">
                                        <table class="table border-bottom-table">
                                            <thead>
                                                <tr class="border-bottom-primary">
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Balita</th>
                                                    <th scope="col">Usia</th>
                                                    <th scope="col">Jenis Kelamin</th>
                                                    <th scope="col">Berat Badan</th>
                                                    <th scope="col">Tinggi Badan</th>
                                                    <th scope="col">Jarak</th>
                                                    <th scope="col">Status Gizi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($neighbors as $index => $neighbor)
                                                    <tr class="border-bottom-secondary">
                                                        <th scope="row">{{ $index + 1 }}</th>
                                                        <td>{{ $neighbor['nama'] }}</td>
                                                        <td>{{ $neighbor['usia'] }}</td>
                                                        <td>{{ $neighbor['jenis_kelamin'] }}</td>
                                                        <td>{{ $neighbor['berat'] }}</td>
                                                        <td>{{ $neighbor['tinggi'] }}</td>
                                                        <td>{{ number_format($neighbor['distance'], 4) }}</td>
                                                        <td>{{ $neighbor['status_gizi'] }}</td>
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
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
                            <p class="mb-0">Copyright <span class="year-update"> </span> © fayzamartadevia </p>
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

    <!-- Feather Icon JS -->
    <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>

    <!-- Scrollbar JS -->
    <script src="{{ asset('js/scrollbar/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/scrollbar/custom.js') }}"></script>

    <!-- Sidebar jQuery -->
    <script src="{{ asset('js/config.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick/slick.js') }}"></script>
    <script src="{{ asset('js/header-slick.js') }}"></script>
    <script src="{{ asset('js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('js/touchspin_2/custom_touchspin.js') }}"></script>
    <script src="{{ asset('js/custom-project.js') }}"></script>
    <script src="{{ asset('js/tooltip-init.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script1.js') }}"></script>
    <script src="{{ asset('js/theme-customizer/customizer.js') }}"></script>
</body>

</html>
