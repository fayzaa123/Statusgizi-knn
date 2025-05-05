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
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <!-- Feather icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
    <!-- Plugins css start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/sweetalert2.css') }}">
    <!-- Plugins css Ends -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('css/color-1.css') }}" media="screen">
    <!-- Responsive css -->
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
                                <h3>Laporan</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('admin/dataset') }}">
                                            <svg class="stroke-icon">
                                                <use href="{{ asset('svg/icon-sprite.svg#stroke-file') }}">
                                                </use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item active"> Laporan</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Container-fluid starts-->
                <div class="container-fluid e-category">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header card-no-border text-end">
<div class="card-header-right-icon">
    <button class="btn btn-primary f-w-500" onclick="window.print()">
        <i class="fa-solid fa-print pe-2"></i>Print
    </button>
</div>
                                </div>
                                <div class="card-body px-0 pt-0">
                                    <!-- Tabel Ringkasan Jumlah Balita -->
                                    <div class="table-responsive mb-4 ms-3">
                                        <style>
                                            .summary-table td,
                                            .summary-table th {
                                                width: 150px;
                                            }

                                            .summary-table td {
                                                text-align: center;
                                            }
                                        </style>
                                        <table class="table table-bordered w-auto align-middle summary-table">
                                            <tbody>
                                                <tr>
                                                    <th>Jumlah Balita</th>
                                                    <td class="text-center">{{ $jumlah_balita }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Gizi Baik</th>
                                                    <td class="text-center">
                                                        {{ $jumlah_status_terbaru->get('Gizi Baik', 0) }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Gizi Buruk</th>
                                                    <td class="text-center">
                                                        {{ $jumlah_status_terbaru->get('Gizi Buruk', 0) }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Gizi Kurang</th>
                                                    <td class="text-center">
                                                        {{ $jumlah_status_terbaru->get('Gizi Kurang', 0) }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Gizi Lebih</th>
                                                    <td class="text-center">
                                                        {{ $jumlah_status_terbaru->get('Gizi Lebih', 0) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- Pie & Bar Chart Container -->
                                        <div class="mb-4 d-flex flex-row gap-4 align-items-center" style="max-width:950px;">
                                            <!-- Pie Chart Jenis Kelamin -->
                                            <div style="max-width:400px;">
                                                <canvas id="pieJenisKelamin"></canvas>
                                            </div>
                                            <!-- Bar Chart Status Gizi -->
                                            <div style="max-width:500px;">
                                                <canvas id="barStatusGizi"></canvas>
                                            </div>
                                        </div>

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
    <!-- latest jquery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js -->
    <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js -->
    <script src="{{ asset('js/scrollbar/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery -->
    <script src="{{ asset('js/config.js') }}"></script>
    <!-- Plugins JS start -->
    <script src="{{ asset('js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick/slick.js') }}"></script>
    <script src="{{ asset('js/header-slick.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/trash_popup.js') }}"></script>
    <script src="{{ asset('js/editors/quill.js') }}"></script>
    <script src="{{ asset('js/custom_category.js') }}"></script>
    <script src="{{ asset('js/modalpage/validation-modal.js') }}"></script>
    <!-- Plugins JS Ends -->
    <!-- Theme js -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script1.js') }}"></script>
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Pie Chart Jenis Kelamin
        const ctxPie = document.getElementById('pieJenisKelamin').getContext('2d');
        new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: ['Laki-Laki', 'Perempuan'],
                datasets: [{
                    data: [{{ $jumlah_laki }}, {{ $jumlah_perempuan }}],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 99, 132, 0.7)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                    title: {
                        display: true,
                        text: 'Diagram Jenis Kelamin Balita'
                    }
                }
            }
        });

        // Bar Chart Status Gizi
        const ctxBar = document.getElementById('barStatusGizi').getContext('2d');
        new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ['Gizi Buruk', 'Gizi Kurang', 'Gizi Baik', 'GiziLebih'],
                datasets: [{
                    label: 'Jumlah',
                    data: [
                        {{ $jumlah_status_terbaru->get('Gizi Buruk', 0) }},
                        {{ $jumlah_status_terbaru->get('Gizi Kurang', 0) }},
                        {{ $jumlah_status_terbaru->get('Gizi Baik', 0) }},
                        {{ $jumlah_status_terbaru->get('Gizi Lebih', 0) }}
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)', // Buruk
                        'rgba(255, 206, 86, 0.7)', // Kurang
                        'rgba(75, 192, 192, 0.7)', // Baik
                        'rgba(153, 102, 255, 0.7)' // Lebih
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Diagram Status Gizi Balita'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        precision: 0
                    }
                }
            }
        });
    </script>
    <script src="{{ asset('js/theme-customizer/customizer.js') }}"></script>
</body>

</html>
