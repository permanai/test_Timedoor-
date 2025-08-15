<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/app.min.css" rel="stylesheet" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                @include('admin.layout.sidebarUser')
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="content-page">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                                <div class="d-flex gap-2 mb-3">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#ratingModal">
                                        Beri Rating
                                    </button>
                                </div>
                                <div class="d-flex flex-wrap align-items-center gap-3">
                                    <form method="GET" action="{{ route('dftr_buku') }}"
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

                                    <form method="GET" action="{{ route('dftr_buku') }}"
                                        class="d-flex align-items-center">
                                        <label class="me-2">Search:</label>
                                        <input type="text" name="search" value="{{ request('search') }}"
                                            class="form-control form-control-sm"
                                            placeholder="Cari buku atau pengarang...">

                                        @if (request('per_page'))
                                            <input type="hidden" name="per_page" value="{{ request('per_page') }}">
                                        @endif

                                        <button type="submit" class="btn btn-primary btn-sm ms-2">Cari</button>

                                        @if (request('search'))
                                            <a href="{{ route('dftr_buku') }}"
                                                class="btn btn-outline-secondary btn-sm ms-2">Reset</a>
                                        @endif
                                    </form>
                                </div>
                            </div>
                            <div class="table-responsive" style="overflow-x: auto;">
                                <table class="table table-bordered table-striped w-100 mt-3">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Nama Buku</th>
                                            <th>Penulis</th>
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal Publish</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $item)
                                            <tr>
                                                <td>{{ $item->nama_buku }}</td>
                                                <td>{{ $item->nama_pengarang ?? '-' }}</td>
                                                <td>{{ $item->kategori->nama_kategori ?? '-' }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td>{{ \Carbon\Carbon::parse($item->tgl_publish)->format('d-m-Y') }}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Tidak ada data buku</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-3">
                                {{ $data->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="ratingModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="{{ route('buku.rating.submit') }}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Rating</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="rating" class="form-label">Buku</label>
                                <select name="id_buku" id="nama_buku" class="form-select">
                                    <option value="">-- Pilih Buku --</option>
                                    @foreach ($books as $book)
                                        <option value="{{ $book->id }}"
                                            data-author="{{ $book->nama_pengarang }}">
                                            {{ $book->nama_buku }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="rating" class="form-label">Pengarang</label>
                                <select id="nama_pengarang" class="form-select">
                                    <option value="">-- Pilih Pengarang --</option>
                                    @foreach ($books as $book)
                                        <option value="{{ $book->id }}" data-title="{{ $book->nama_buku }}">
                                            {{ $book->nama_pengarang }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <select name="rating" id="rating" class="form-select" required>
                                    <option value="">-- Pilih Rating --</option>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="../assets/js/vendor.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/app.min.js"></script>
        <script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script src="../assets/js/pages/datatables.init.js"></script>
        <script>
            $(document).ready(function() {
                $('#nama_buku').on('change', function() {
                    let val = $(this).val();
                    if ($('#nama_pengarang option[value="' + val + '"]').length) {
                        $('#nama_pengarang').val(val).trigger('change.select2');
                    }
                });

                $('#nama_pengarang').on('change', function() {
                    let val = $(this).val();
                    if ($('#nama_buku option[value="' + val + '"]').length) {
                        $('#nama_buku').val(val).trigger('change.select2');
                    }
                });

                $('#nama_buku, #nama_pengarang').select2({
                    theme: 'bootstrap-5',
                    width: '100%',
                    dropdownParent: $('#ratingModal'),
                    allowClear: false
                });

                $('#ratingModal #nama_buku, #ratingModal #nama_pengarang').on('select2:open', function() {
                    $('.select2-results__options').css({
                        'max-height': '200px',
                        'overflow-y': 'auto'
                    });
                });

                $('#rating').select2({
                    theme: 'bootstrap-5',
                    width: '100%',
                    minimumResultsForSearch: Infinity,
                    dropdownParent: $('#ratingModal'),
                    multiple: false,
                    tags: false
                });

                $('#nama_buku').on('change', function() {
                    $('#nama_pengarang').val($(this).val()).trigger('change.select2');
                });
                $('#nama_pengarang').on('change', function() {
                    $('#nama_buku').val($(this).val()).trigger('change.select2');
                });

                var btnRating = document.querySelector('[data-bs-target="#ratingModal"]');
                if (btnRating) {
                    btnRating.addEventListener('click', function() {
                        new bootstrap.Modal(document.getElementById('ratingModal')).show();
                    });
                }

                // var btnFilter = document.querySelector('[data-bs-target="#filterModal"]');
                // if (btnFilter) {
                //     btnFilter.addEventListener('click', function() {
                //         new bootstrap.Modal(document.getElementById('filterModal')).show();
                //     });
                // }
            });
        </script>

</body>

</html>
