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
    <title>Civita - Status Gizi Balita</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&amp;display=swap" rel="stylesheet">
    <!-- Icon Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <!-- Landing Icons -->
    <link rel="icon" href="{{ asset('svg/landing-icons.svg') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/animate.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

  </head>
  <body class="landing-page">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="landing-page">
      <!-- Page Body Start-->
      <div class="landing-home">
        <div class="container-fluid">
          <div class="sticky-header">
            <header>                       
                <nav class="navbar navbar-b navbar-dark navbar-trans navbar-expand-xl fixed-top nav-padding" id="sidebar-menu">
                    <a class="navbar-brand p-0" href="#">
                        <img class="img-fluid" src="{{ asset('images/landing/landing_logo.png') }}" alt="Landing Logo">
                    </a>
                    <button class="navbar-toggler navabr_btn-set custom_nav" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="navbar-collapse justify-content-center collapse hidenav" id="navbarDefault">
                        <ul class="navbar-nav navbar_nav_modify" id="scroll-spy">
                            <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">Applications</a></li>
                            <li class="nav-item"><a class="nav-link" href="#documentation">Documentation</a></li>
                            <li class="nav-item"><a class="nav-link" href="#landings">Landings</a></li>
                            <li class="nav-item"><a class="nav-link" href="#faq">Faq</a></li>
                        </ul>
                    </div>
                    <div class="buy-btn rounded-pill">
                        <a class="nav-link js-scroll" href="{{ url('register') }}" target="_blank">Sign</a>
                    </div>
                </nav>               
            </header>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10">
                <div class="content text-center">
                    <div>
                        <h6 class="content-title">
                            <img class="arrow-decore" src="{{ asset('images/landing/decore/arrow.svg') }}" alt="">
                            <span class="sub-title">Perkenalkan</span>
                        </h6>
                        <h1 class="wow fadeIn">
                            Sistem Identifikasi <span>Status Gizi Balita</span> Dengan Teknologi Terkini
                        </h1>
                        <p class="mt-3 wow fadeIn">
                            Selamat datang di Civita - solusi berbasis web untuk mengidentifikasi status gizi balita
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-8 col-md-10">
                <img class="screen1 img-fluid" src="{{ asset('images/landing/screen1.png') }}" alt="">
            </div>
        </div>        
        </div>
      </div>
        <section class="build-section"> 
            <div class="container">
                <ul class="decoration">
                    <li class="loader-gif"><span class="loader-1"> </span></li>
                </ul>
                <div class="row"> 
                    <div class="col-sm-12 wow pulse"> 
                        <div class="landing-title text-start">
                            <h2>Pantau <span class="gradient-6">status gizi balita </span> dengan cara mudah dan simpel.</h2>
                            <img class="title-img d-sm-block d-none" src="{{ asset('images/landing/decore/arrow-4.svg') }}" alt="">
                            <h4 class="d-sm-block d-none sub-title rotate-title mb-0">Ayo kenali tumbuh kembang anak!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>    

      <div class="bottom-section-grad">
        <section class="faq-section section-space" id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="landing-title text-center">
                            <h5 class="sub-title">Frequently Ask Question</h5>
                            <h2>Punya Pertanyaan <span class="gradient-11">Tentang Sistem Kami? </span> Cek di Sini!</h2>
                            <p>Kamu bisa tanya kapan saja tentang apa pun yang berhubungan dengan sistem kami. Kami selalu siap membantu!</p>
                        </div>
                        <div class="vector-image">
                            <img src="{{ asset('images/landing/vectors/4.svg') }}" alt="vector women">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="accordion" id="faqaccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">Bagaimana sistem ini membantu memantau status gizi balita?</button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="faqOne" aria-labelledby="faq1" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body f-light">
                                        Sistem ini memproses data seperti berat badan, tinggi badan, dan usia balita untuk memberikan gambaran status gizi dan rekomendasi perbaikan. Semua data diolah sesuai standar kesehatan terbaru.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">Apakah sistem ini hanya untuk tenaga kesehatan?</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="faqTwo" aria-labelledby="faq2" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body f-light">
                                        Tidak! Sistem ini cocok digunakan oleh orang tua, posyandu, maupun tenaga kesehatan untuk mendukung pemantauan tumbuh kembang balita.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">Apa saja data yang diperlukan untuk menggunakan sistem ini?</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="faqThree" aria-labelledby="faq3" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body f-light">
                                        Kamu hanya perlu memasukkan data seperti berat badan, tinggi badan, usia, dan jenis kelamin balita.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">Apakah data balita aman di sistem ini?</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="faqFour" aria-labelledby="faq4" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body f-light">Iya, semua data yang kamu masukkan dijamin kerahasiaannya dengan teknologi keamanan terkini.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      </div>
      <footer class="footer-bg">
        <div class="container">
          <div class="sub-footer row g-2">
            <div class="col-md-6"> 
              <h6 class="mb-0">fayzamartadevia © 2025 Civita, All rights reserved.</h6>
            </div>
            <div class="col-md-6"> 
              <ul> 
                <li> 
                  <h6 class="mb-0">Find us on</h6>
                </li>
                <li> <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></a></li>
                <li><a href="https://twitter.com/login"> <i class="fa-brands fa-square-x-twitter"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- Feather Icon JS -->
    <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('js/tooltip-init.js') }}"></script>
    <script src="{{ asset('js/animation/wow/wow.min.js') }}"></script>
    <script src="{{ asset('js/landing_sticky.js') }}"></script>
    <script src="{{ asset('js/landing.js') }}"></script>
    <script src="{{ asset('js/jarallax_libs/libs.min.js') }}"></script>
    <!-- Slick Carousel JS -->
    <script src="{{ asset('js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick/slick.js') }}"></script>
    <script src="{{ asset('js/landing-slick.js') }}"></script>
    <!-- Plugins JS Ends-->
  </body>
</html>