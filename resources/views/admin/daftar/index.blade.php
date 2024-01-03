<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Daftar </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets_admin/images/favicon.png')}}">
    <link href="{{asset('assets_admin/css/style.css')}}" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                @if(session()->has('sukses'))
                <div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
                    <span><i class="mdi mdi-check"></i></span>
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                class="mdi mdi-close"></i></span>
                    </button> <strong>Sukses!</strong> {{session('sukses')}}
                </div>
                @endif
                @if(session()->has('gagal'))
                <div class="alert alert-danger solid alert-right-icon alert-dismissible fade show">
                    <span><i class="mdi mdi-help"></i></span>
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                class="mdi mdi-close"></i></span>
                    </button>
                    <strong>Gagal!</strong> {{session('gagal')}}
                </div>
                @endif
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="/proses_daftar" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Nama Lengkap</strong></label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Masukan nama anda">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Masukan password anda">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3 text-center">
                                        <p>Already have an account? <a class="text-primary" href="/login">Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('assets_admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('assets_admin/js/quixnav-init.js')}}"></script>
    <!--endRemoveIf(production)-->
</body>

</html>