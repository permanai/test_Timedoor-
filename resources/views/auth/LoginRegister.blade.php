<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Tes</title>
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
    <style>
        .bg-brown-with-image {
            background-color: #8B4513;
            background-image: url("{{ asset('img/login3.jpg') }}");
            background-size: 1060px 800px;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
        }
    </style>
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
                                Log In
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tab-login">
                            <p class="text-muted mb-3">Masukkan Email Dan Password.</p>

                            <!-- form -->
                            <form action="/login" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" name="email" type="email" id="emailaddress"
                                        required="" placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <a href="auth-recoverpw-2.html" class="text-muted float-right"></a>
                                    <label for="password">Password</label>
                                    <input class="form-control" name="password" type="password" required=""
                                        id="password" placeholder="Enter your password">
                                </div>
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit">Log In </button>
                                </div>

                                {{-- <div class="text-center p-t-90 txt1">
                                    Belum Punya Akun?
                                    <a class="txt1" href="{{ route('register') }}">Daftar Disini</a>
                                </div> --}}
                            </form>
                        </div>

                    </div>
                </div>

                <footer class="footer footer-alt">
                    <p class="text-muted">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> &copy; Test <a href="javascript: void(0);" class="text-muted"></a>
                    </p>
                </footer>

            </div> <!-- end .card-body -->
        </div>
        <div class="auth-fluid-right bg-brown-with-image">
        </div>
    </div>

    </div>
    <script src="../assets/js/vendor.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
</body>

</html>
