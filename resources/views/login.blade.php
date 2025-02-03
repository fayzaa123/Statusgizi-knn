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
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <title>Status Gizi Balita - KNN</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font Awesome--><!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
    <!-- Ico-Font -->
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
    <!-- Color CSS -->
    <link id="color" rel="stylesheet" href="{{ asset('css/color-1.css') }}" media="screen">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{ asset('images/login/3.jpg') }}"
                    alt="looginpage"></div>
            <div class="col-xl-7 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light"
                                    src="{{ asset('images/logo/logo.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('images/logo/logo_dark.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">

                            <form class="theme-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <h4>Sign in to account</h4>
                                <p>Enter your email & password to login</p>
                                                            @error('email')
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <span class="txt-light">{{ $message }} </span>
                                </div>
                            @enderror
                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <input class="form-control" type="email" required=""
                                        placeholder="test@gmail.com" name="email">

                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required=""
                                            placeholder="*********">
                                        <div class="show-hide"><span class="show"> </span></div>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="form-check">
                                        <input class="checkbox-primary form-check-input" id="checkbox1" type="checkbox">
                                        <label class="text-muted form-check-label" for="checkbox1">Remember
                                            password</label>
                                    </div><a class="link" href="/forgot-password">Forgot password?</a>
                                    <div class="text-end">
                                        <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Sign
                                            in</button>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-4">
                                    <div class="col">
                                        <hr class="border-secondary">
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-muted m-0">Or</h6>
                                    </div>
                                    <div class="col">
                                        <hr class="border-secondary">
                                    </div>
                                </div>
                                <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2"
                                        href="/register">Create Account</a></p>

                                    
                                <script>
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script>
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
        <script src="{{ asset('js/alert.js') }}"></script>

    </div>
</body>

</html>
