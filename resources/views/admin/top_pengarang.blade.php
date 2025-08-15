<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/ubold/layouts/default/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Sep 2020 17:25:35 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Test</title>
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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped w-100">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pengarang</th>
                                            <th>Pemilih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pengarang as $i => $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_pengarang }}</td>
                                                <td>{{ $item->voter }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="text-center">Tidak ada data pengarang</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <script src="../assets/js/vendor.min.js"></script>
            <script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="../assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
            <script src="../assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="../assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
            <script src="../assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="../assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
            <script src="../assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="../assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
            <script src="../assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="../assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
            <script src="../assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
            <script src="../assets/libs/pdfmake/build/pdfmake.min.js"></script>
            <script src="../assets/libs/pdfmake/build/vfs_fonts.js"></script>
            <script src="../assets/js/pages/datatables.init.js"></script>
            <script src="../assets/js/app.min.js"></script>

</body>

</html>
