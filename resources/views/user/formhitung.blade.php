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
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">

    <!-- Ico Font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <!-- Themify Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
    <!-- Flag Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <!-- Feather Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
    <!-- Plugins CSS Start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/animate.css') }}">
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
            @include('component.sidebar-user')
            <!-- Page Sidebar Ends-->

            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Ukur Balita</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('user.hitung') }}">
                                            <svg class="stroke-icon">
                                                <use href="{{ asset('svg/icon-sprite.svg#stroke-widget') }}"></use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item active"> Ukur Balita</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Form Hitung Gizi Balita</h5>tetangga
                                </div>
                                <div class="card-body">
                                    <form class="row g-3 needs-validation custom-input" novalidate="" method="POST" action="{{ route('hitung.klasifikasi') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-4 position-relative">
                                            <label class="form-label" for="validationTooltip01">Nama Balita</label>
                                            <input class="form-control" id="validationTooltip01" type="text"
                                                placeholder="Nama" required="">
                                            <div class="valid-tooltip">Sudah Benar!</div>
                                        </div>

                                        <div class="col-md-3 position-relative">
                                            <label class="form-label" for="validationTooltip04">Jenis kelamin</label>
                                            <select class="form-select" id="validationTooltip04" required="">
                                                <option selected="" disabled="" value="">Pilih...
                                                </option>
                                                <option>Perempuan </option>
                                                <option>Laki-Laki </option>
                                            </select>
                                            <div class="invalid-tooltip">Sudah Benar!.</div>
                                        </div>

                                        <div class="col-md-4 position-relative">
                                            <label class="form-label" for="validationTooltip02">Usia</label>
                                            <input class="form-control" id="validationTooltip02" type="text"
                                                placeholder="Bulan" required="" name="umur">
                                            <div class="valid-tooltip">Sudah Benar!</div>
                                        </div>

                                        <div class="col-md-3 position-relative">
                                            <label class="form-label" for="validationTooltip05">Tinggi Badan</label>
                                            <input class="form-control" id="validationTooltip05" type="Cm"
                                            placeholder="Cm" required="" name="tinggi">
                                            <div class="invalid-tooltip">Sudah Benar!</div>
                                        </div>

                                        <div class="col-md-3 position-relative">
                                            <label class="form-label" for="validationTooltip05">Berat Badan</label>
                                            <input class="form-control" id="validationTooltip05" type="Kg"
                                            placeholder="Kg" required="" name="berat">
                                            <div class="invalid-tooltip">Sudah Benar!</div>
                                        </div>

                                        <div class="col-md-3 position-relative">
                                            <label class="form-label" for="validationTooltip04">Tetangga
                                                terdekat</label>

                                            <select class="form-select" id="validationTooltip04" required="" name="k">
                                                <option selected disabled value="">Pilih...</option>
                                                <option value="3">K3</option>
                                                <option value="5">K5</option>
                                                <option value="7">K7</option>
                                                <option value="9">K9</option>
                                            </select>
                                            <div class="invalid-tooltip">Sudah Benar!</div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Hitung</button>
                                        </div>
                                    </form>
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
    <!-- Plugins JS Start -->
    <script src="{{ asset('js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick/slick.js') }}"></script>
    <script src="{{ asset('js/header-slick.js') }}"></script>
    <script src="{{ asset('js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('js/height-equal.js') }}"></script>
    <script src="{{ asset('js/custom-animated-form.js') }}"></script>
    <script src="{{ asset('js/custom-pwd-validation.js') }}"></script>
    <!-- Plugins JS Ends -->
    <!-- Theme JS -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script1.js') }}"></script>
    <script src="{{ asset('js/theme-customizer/customizer.js') }}"></script>

</body>

</html>
