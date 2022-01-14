<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laraschool | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <div class="col-md-8">
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <h4 class="font-weight-bold">REGISTER</h4>
            <hr>
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Full Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Lengkap">
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Email address</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Alamat Email">
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password">
                            @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Masukkan Konfirmasi Password">
                        </div>
                    </div>

                </div>
                
                <button type="submit" class="btn btn-primary">REGISTER</button>
            </form>
        </div>
    </div>
    <div class="login mt-3 text-center">
        <p>Sudah punya akun ? Login <a href="/login">Disini</a></p>
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/js/adminlte.min.js"></script>
</body>
</html>