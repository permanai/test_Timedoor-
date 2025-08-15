<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/ubold/layouts/default/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Sep 2020 17:25:35 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Tes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
    <link href="../assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="../icon" type="image/png" href="favicon.ico" />
</head>

<body class="loading">
    <div id="wrapper">
        <div class="navbar-custom">
            <div class="container-fluid">
                @include('admin.layout.navbar')
                <div class="logo-box">
                    <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="../assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="left-side-menu">
            <div class="h-100" data-simplebar>
                @include('admin.layout.sidebar')
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Jumlah Buku -->
                        <div class="col-md-4">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-book-multiple widget-icon"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0">Total Buku</h5>
                                    <h3 class="mt-3 mb-3">{{ $stats['jumlahBuku'] }}</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Jumlah Pengarang -->
                        <div class="col-md-4">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-account-multiple widget-icon"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0">Total Pengarang</h5>
                                    <h3 class="mt-3 mb-3">{{ $stats['jumlahPengarang'] }}</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Jumlah Rating -->
                        <div class="col-md-4">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-star widget-icon"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0">Total Rating</h5>
                                    <h3 class="mt-3 mb-3">{{ $stats['jumlahRating'] }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rightbar-overlay"></div>
    <script src="../assets/js/vendor.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
</body>

</html>
