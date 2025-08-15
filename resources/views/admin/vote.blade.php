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
                            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">

                                {{-- Kiri: Show entries --}}
                                <div>
                                    <form method="GET" action="{{ route('vote.index') }}"
                                        class="d-flex align-items-center">
                                        <label class="me-2">Show</label>
                                        <select name="per_page" class="form-select form-select-sm"
                                            onchange="this.form.submit()">
                                            @foreach ([10, 20, 30, 40, 50, 100] as $size)
                                                <option value="{{ $size }}"
                                                    {{ request('per_page', 10) == $size ? 'selected' : '' }}>
                                                    {{ $size }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <label class="ms-2">entries</label>

                                        @if (request('search'))
                                            <input type="hidden" name="search" value="{{ request('search') }}">
                                        @endif
                                    </form>
                                </div>

                                {{-- Kanan: Search --}}
                                <div>
                                    <form method="GET" action="{{ route('vote.index') }}"
                                        class="d-flex align-items-center">
                                        <label class="me-2">Search:</label>
                                        <input type="text" name="search" value="{{ request('search') }}"
                                            class="form-control form-control-sm">
                                        {{-- Pertahankan per_page jika ada --}}
                                        @if (request('per_page'))
                                            <input type="hidden" name="per_page" value="{{ request('per_page') }}">
                                        @endif
                                    </form>
                                </div>

                            </div>


                            <div class="table-responsive" style="overflow-x: auto;">
                                <table class="table table-bordered table-striped w-100 mt-3">
                                    <thead class="table-dark">
                                        <tr>
                                            {{-- <th>No</th> --}}
                                            <th>Nama Buku</th>
                                            <th>Kategori</th>
                                            <th>Nama Pengarang</th>
                                            <th>Rating Rata-Rata</th>
                                            <th>Pemilih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($buku as $i => $item)
                                            <tr>
                                                {{-- Nomor urut sesuai halaman --}}
                                                {{-- <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }} --}}
                                                </td>
                                                <td>{{ $item->nama_buku }}</td>
                                                <td>{{ $item->kategori->nama_kategori }}</td>
                                                <td>{{ $item->nama_pengarang }}</td>
                                                <td>{{ $item->average_rating }}</td>
                                                <td>{{ $item->voter }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Tidak ada data buku</td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-3">
                                {{ $buku->links() }}
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
