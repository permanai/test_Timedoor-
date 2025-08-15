<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="https://coderthemes.com/ubold/layouts/assets/images/favicon.ico">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
    <link href="../assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/styles.css" rel="stylesheet">
</head>

<body class="loading auth-fluid-pages pb-0">
    <div class="auth-fluid">
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">
                    <div class="auth-brand text-center text-lg-left">
                        <div class="auth-logo">
                            <a href="index.html" class="logo logo-light text-center">
                                {{-- <span class="logo-lg">
                                    <img src="../assets/images/mojokerto-pugeran.png" alt="logo">
                                </span> --}}
                            </a>
                        </div>
                    </div>

                    <ul class="nav nav-tabs nav-bordered">
                        <li class="nav-item">
                            <a href="#tab-login" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                Sign Up
                            </a>
                        </li>
                    </ul>
                    <div class="tab-pane" id="tab-signup">
                        <p class="text-muted mb-3">Belum punya akun? Buat akun Anda, hanya butuh waktu kurang dari satu
                            menit</p>
                        <form action="/register" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="fullname">Nama</label>
                                <input class="form-control" name="name" type="text" id="fullname" required>
                            </div>
                            <div class="form-group">
                                <label for="emailaddress">Email address</label>
                                <input class="form-control" name="email" type="email" id="emailaddress" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" name="password" type="password" required id="password">
                            </div>

                            <div class="form-group">
                                <label for="telp">Telp</label>
                                <input class="form-control" name="telp" type="text" id="telp" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control" name="alamat" type="text" id="alamat" required>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary waves-effect waves-light btn-block" type="submit"> Sign
                                    Up </button>
                            </div>
                            <div class="text-center p-t-90 txt1">
                                Sudah Punya Akun?
                                <a class="txt1" href="{{ route('login') }}">Masuk Disini</a>
                            </div>
                        </form>
                        <!-- end form-->
                    </div>

                </div>
            </div>

            <footer class="footer footer-alt">
                <p class="text-muted">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Test <a href="javascript: void(0);"
                        class="text-muted"></a>
                </p>
            </footer>

        </div> <!-- end .card-body -->
    </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
<div class="auth-fluid-right" style="display: flex; justify-content: flex-end; margin-top: 150px; margin-left: 250px;">
        <div class="auth-user-testimonial">
            <img src="{{asset('../assets/images/bglogin.png')}}" alt="Background Image" width="1250">
            {{-- <h2 class="mb-3 text-white">Test</h2> --}}

            {{-- <p class="lead"><i class="mdi mdi-format-quote-open"></i>
                <span class="typed"></span>
                <i class="mdi mdi-format-quote-close"></i>
            </p> --}}

        </div>
    </div>
    </div>
    <script src="../assets/js/vendor.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
</body>

</html>
