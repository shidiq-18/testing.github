<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Library | Halaman Registrasi</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/vendor/stellar/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/vendor/stellar/assets/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="/vendor/stellar/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/vendor/stellar/assets/css/vertical-light-layout/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/vendor/stellar/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-start auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">

                        <div class="auth-form-light text-left p-5">
                            @if (session('info'))
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    {{ session('info') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="brand-logo">
                                <img src="/images/logo.png" style="width: 65px">
                                <span class="text-success fw-bold fs-4"
                                    style="text-shadow: 1px 1px 2px rgba(0,0,0,0.6)">E-Library</span>
                            </div>
                            <h4>Form Registrasi User E-Library</h4>
                            <h6 class="font-weight-light">Silahkan lengkapi form berikut!</h6>
                            <form class="pt-3" action="/register" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-lg @error('nama') is-invalid @enderror"
                                        id="nama" name="nama" placeholder="Nama Lengkap"
                                        value="{{ old('nama') }}">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-lg @error('username') is-invalid @enderror"
                                        id="username" name="username" placeholder="Username"
                                        value="{{ old('username') }}">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="Alamat Email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-lg @error('no_hp') is-invalid @enderror"
                                        id="no_hp" name="no_hp" placeholder="Nomor Handphone"
                                        value="{{ old('no_hp') }}">
                                    @error('no_hp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        id="password" name="password" placeholder="Password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-lg @error('password1') is-invalid @enderror"
                                        id="password1" name="password1" placeholder="Password Konfirmasi">
                                    @error('password1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn d-grid btn-primary btn-lg font-weight-medium auth-form-btn w-100">REGISTER</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Anda sudah memiliki akun? Silahkan <a
                                        href="/" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/vendor/stellar/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/vendor/stellar/assets/js/off-canvas.js"></script>
    <script src="/vendor/stellar/assets/js/hoverable-collapse.js"></script>
    <script src="/vendor/stellar/assets/js/misc.js"></script>
    <script src="/vendor/stellar/assets/js/settings.js"></script>
    <script src="/vendor/stellar/assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
