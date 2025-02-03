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
                                <h3>Dataset</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('admin/dataset') }}">
                                            <svg class="stroke-icon">
                                                <use href="{{ asset('svg/icon-sprite.svg#stroke-file') }}">
                                                </use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item active"> Dataset</li>
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
                                    <div class="card-header-right-icon"><a class="btn btn-primary f-w-500"
                                            href="#!" data-bs-toggle="modal" data-bs-target="#dashboard8"><i
                                                class="fa-solid fa-plus pe-2"></i>Tambah Data</a>
                                        <div class="modal fade" id="dashboard8" tabindex="-1"
                                            aria-labelledby="dashboard8" aria-hidden="true">
                                            <!-- Modal HTML -->
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content category-popup">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modaldashboard">Tambah Data</h5>
                                                        <button class="btn-close" type="button"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body p-0 custom-input">
                                                        <div class="text-start">
                                                            <div class="col-sm-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5>Form Hitung Gizi Balita</h5>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <!-- Form -->
                                                                        <form id="balitaForm" method="POST"
                                                                            action="{{ route('balita.store') }}"
                                                                            class="row g-3 needs-validation custom-input"
                                                                            novalidate>
                                                                            @csrf
                                                                            <div class="col-md-4 position-relative">
                                                                                <label class="form-label"
                                                                                    for="nama_balita">Nama
                                                                                    Balita</label>
                                                                                <input class="form-control"
                                                                                    id="nama_balita" name="nama"
                                                                                    type="text" placeholder="Nama"
                                                                                    required>
                                                                            </div>

                                                                            <div class="col-md-3 position-relative">
                                                                                <label class="form-label"
                                                                                    for="jenis_kelamin">Jenis
                                                                                    Kelamin</label>
                                                                                <select class="form-select"
                                                                                    id="jenis_kelamin"
                                                                                    name="jenis_kelamin" required>
                                                                                    <option value="" disabled
                                                                                        selected>Choose...</option>
                                                                                    <option>Perempuan</option>
                                                                                    <option>Laki-Laki</option>
                                                                                </select>
                                                                            </div>

                                                                            <div class="col-md-4 position-relative">
                                                                                <label class="form-label"
                                                                                    for="usia">Usia
                                                                                    (minggu)</label>
                                                                                <input class="form-control"
                                                                                    id="usia" name="usia"
                                                                                    type="text" placeholder="Umur"
                                                                                    required>
                                                                            </div>

                                                                            <div class="col-md-3 position-relative">
                                                                                <label class="form-label"
                                                                                    for="tinggi_badan">Tinggi
                                                                                    Badan</label>
                                                                                <input class="form-control"
                                                                                    id="tinggi_badan" name="tinggi"
                                                                                    type="number"
                                                                                    placeholder="Tinggi Badan"
                                                                                    required>
                                                                            </div>

                                                                            <div class="col-md-3 position-relative">
                                                                                <label class="form-label"
                                                                                    for="berat_badan">Berat
                                                                                    Badan</label>
                                                                                <input class="form-control"
                                                                                    id="berat_badan" name="berat"
                                                                                    type="number"
                                                                                    placeholder="Berat Badan" required>
                                                                            </div>

                                                                            <div class="col-md-3 position-relative">
                                                                                <label class="form-label"
                                                                                    for="tetangga_terdekat">Status
                                                                                    Gizi</label>
                                                                                <select class="form-select"
                                                                                    id="tetangga_terdekat"
                                                                                    name="status_gizi" required>
                                                                                    <option value="" disabled
                                                                                        selected>Choose...</option>
                                                                                    <option>Baik</option>
                                                                                    <option>Buruk</option>
                                                                                    <option>Kurang</option>
                                                                                    <option>Lebih</option>
                                                                                </select>
                                                                            </div>

                                                                            <div class="col-12">
                                                                                <button class="btn btn-primary"
                                                                                    type="submit">Submit Form</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-0">
                                    <div class="list-product list-category">
                                        <div class="recent-table table-responsive custom-scrollbar">
                                            <table class="table" id="project-status">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th> <span class="c-o-light f-w-600">Nama Balita</span></th>
                                                        <th> <span class="c-o-light f-w-600">Usia</span></th>
                                                        <th> <span class="c-o-light f-w-600">Jenis Kelamin</span></th>
                                                        <th> <span class="c-o-light f-w-600">Berat Badan</span></th>
                                                        <th> <span class="c-o-light f-w-600">Tinggi Badan</span></th>
                                                        <th> <span class="c-o-light f-w-600">Status Gizi</span></th>
                                                        <th> <span class="c-o-light f-w-600">Action</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($balita as $balita)
                                                        <tr class="product-removes inbox-data">
                                                            <td>{{ $balita->id_balita }}</td>
                                                            <td>{{ $balita->nama }}</td>
                                                            <td>{{ $balita->usia }} minggu</td>
                                                            <td>{{ $balita->jenis_kelamin }}</td>
                                                            <td>{{ $balita->berat }} kg</td>
                                                            <td>{{ $balita->tinggi }} cm</td>
                                                            <td>{{ $balita->status_gizi }}</td>
                                                            <td>
                                                                <ul class="action">

                                                                    <!-- Edit Modal -->
                                                                    <li class="edit">
                                                                        <a href="#" data-bs-toggle="modal"
                                                                            data-bs-target="#editModalku{{ $balita->id_balita }}">
                                                                            <i class="fa-regular fa-pen-to-square"></i>
                                                                        </a>
                                                                    </li>

                                                                    <!-- Edit Modal -->
                                                                    <div class="modal fade"
                                                                        id="editModalku{{ $balita->id_balita }}"
                                                                        tabindex="-1" aria-labelledby="editModalku"
                                                                        aria-hidden="true">

                                                                        <div
                                                                            class="modal-dialog modal-dialog-centered modal-lg">
                                                                            <div class="modal-content category-popup" style="background-color: white">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="modaldashboardku">Edit Data
                                                                                    </h5>
                                                                                    <button class="btn-close"
                                                                                        type="button"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div
                                                                                    class="modal-body p-0 custom-input">
                                                                                    <div class="text-start">
                                                                                        <div class="col-sm-12">
                                                                                            <div class="card">
                                                                                                <div
                                                                                                    class="card-header">
                                                                                                    <h5>Form Edit Gizi
                                                                                                        Balita</h5>
                                                                                                </div>
                                                                                                <div class="card-body">
                                                                                                    <form
                                                                                                        method="POST"
                                                                                                        action="{{ route('balita.update', $balita->id_balita) }}"
                                                                                                        class="row g-3 needs-validation custom-input"
                                                                                                        novalidate>
                                                                                                        @csrf
                                                                                                        @method('PUT')
                                                                                                        <div
                                                                                                            class="col-md-4 position-relative">
                                                                                                            <label
                                                                                                                class="form-label"
                                                                                                                for="nama_balita">Nama
                                                                                                                Balita</label>
                                                                                                            <input
                                                                                                                class="form-control"
                                                                                                                id="nama_balita"
                                                                                                                name="nama"
                                                                                                                type="text"
                                                                                                                value="{{ $balita->nama }}"
                                                                                                                required>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="col-md-3 position-relative">
                                                                                                            <label
                                                                                                                class="form-label"
                                                                                                                for="jenis_kelamin">Jenis
                                                                                                                Kelamin</label>
                                                                                                            <select
                                                                                                                class="form-select"
                                                                                                                id="jenis_kelamin"
                                                                                                                name="jenis_kelamin"
                                                                                                                required>
                                                                                                                <option
                                                                                                                    value="Perempuan"
                                                                                                                    {{ $balita->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                                                                                                    Perempuan
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="Laki-Laki"
                                                                                                                    {{ $balita->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>
                                                                                                                    Laki-Laki
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="col-md-4 position-relative">
                                                                                                            <label
                                                                                                                class="form-label"
                                                                                                                for="usia">Usia
                                                                                                                (minggu)
                                                                                                            </label>
                                                                                                            <input
                                                                                                                class="form-control"
                                                                                                                id="usia"
                                                                                                                name="usia"
                                                                                                                type="text"
                                                                                                                value="{{ $balita->usia }}"
                                                                                                                required>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="col-md-3 position-relative">
                                                                                                            <label
                                                                                                                class="form-label"
                                                                                                                for="tinggi_badan">Tinggi
                                                                                                                Badan</label>
                                                                                                            <input
                                                                                                                class="form-control"
                                                                                                                id="tinggi_badan"
                                                                                                                name="tinggi"
                                                                                                                type="number"
                                                                                                                value="{{ $balita->tinggi }}"
                                                                                                                required>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="col-md-3 position-relative">
                                                                                                            <label
                                                                                                                class="form-label"
                                                                                                                for="berat_badan">Berat
                                                                                                                Badan</label>
                                                                                                            <input
                                                                                                                class="form-control"
                                                                                                                id="berat_badan"
                                                                                                                name="berat"
                                                                                                                type="number"
                                                                                                                value="{{ $balita->berat }}"
                                                                                                                required>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="col-md-3 position-relative">
                                                                                                            <label
                                                                                                                class="form-label"
                                                                                                                for="tetangga_terdekat">Status
                                                                                                                Gizi</label>
                                                                                                            <select
                                                                                                                class="form-select"
                                                                                                                id="tetangga_terdekat"
                                                                                                                name="status_gizi"
                                                                                                                required>
                                                                                                                <option
                                                                                                                    value="Baik"
                                                                                                                    {{ $balita->status_gizi == 'Baik' ? 'selected' : '' }}>
                                                                                                                    Baik
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="Buruk"
                                                                                                                    {{ $balita->status_gizi == 'Buruk' ? 'selected' : '' }}>
                                                                                                                    Buruk
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="Kurang"
                                                                                                                    {{ $balita->status_gizi == 'Kurang' ? 'selected' : '' }}>
                                                                                                                    Kurang
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="Lebih"
                                                                                                                    {{ $balita->status_gizi == 'Lebih' ? 'selected' : '' }}>
                                                                                                                    Lebih
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="col-12">
                                                                                                            <button
                                                                                                                class="btn btn-primary"
                                                                                                                type="submit">Update
                                                                                                                Data</button>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <li class="delete">
                                                                        <a href="{{ route('balita.destroy', $balita->id_balita) }}"
                                                                            onclick="event.preventDefault();
                                                                            if(confirm('Are you sure you want to delete this data?')) {
                                                                              document.getElementById('delete-form-{{ $balita->id_balita }}').submit();}">
                                                                            <i class="fa-solid fa-trash-can"></i>
                                                                        </a>
                                                                        <form
                                                                            id="delete-form-{{ $balita->id_balita }}"
                                                                            action="{{ route('balita.destroy', $balita->id_balita) }}"
                                                                            method="POST" style="display: none;">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </td>
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
    <script src="{{ asset('js/theme-customizer/customizer.js') }}"></script>
</body>

</html>
