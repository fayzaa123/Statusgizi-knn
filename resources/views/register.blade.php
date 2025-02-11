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
    <!-- Ico-font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <!-- Themify Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
    <!-- Flag Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <!-- Feather Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('css/color-1.css') }}" media="screen">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-xl-6"><img class="bg-img-cover bg-center" src="{{ asset('images/login/8.jpg') }}"
                    alt="looginpage"></div>
            <div class="col-xl-6 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light"
                                    src="{{ asset('images/logo/logo.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('images/logo/logo_dark.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main create-account">
                            <form class="theme-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <h4>Pendaftaran Akun</h4>
                                <p>Lengkapi data berikut untuk melanjutkan pendaftaran</p>
                                <div class="form-group">
                                    <label class="col-form-label">Nama</label>
                                    <input class="form-control" type="text" required="" placeholder="Nama Anda"
                                        name="nama">
                                    @error('nama')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Email</label>
                                    <input class="form-control" type="email" required=""
                                        placeholder="test@gmail.com" name="email">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Kata Sandi</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required=""
                                            placeholder="*********">
                                        <div class="show-hide"><span class="show"></span></div>
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <br>
                                    <button class="btn btn-primary btn-block w-100" type="submit">Daftar</button>
                                </div>
                                <div class="row align-items-center mt-4">
                                    <div class="col">
                                        <hr class="border-secondary">
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-muted m-0">Atau</h6>
                                    </div>
                                    <div class="col">
                                        <hr class="border-secondary">
                                    </div>
                                </div>
                                <p class="mt-4 mb-0 text-center">Sudah memiliki akun?<a class="ms-2"
                                        href="/login">Masuk</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest jQuery -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <!-- Feather Icon JS -->
        <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
        <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>
        <!-- Config JS -->
        <script src="{{ asset('js/config.js') }}"></script>
        <!-- Theme JS -->
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/script1.js') }}"></script>
    </div>
</body>

</html>
