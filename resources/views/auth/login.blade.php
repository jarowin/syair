<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login to Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="https://i.postimg.cc/D0hrDm6G/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/material.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}" id="main-style-link">
</head>

<body>
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <img src="https://i.postimg.cc/B6nsCC9P/logo.png" alt="Toto Abadi" width="120" height="50" class="img-fluid mb-4">
                            <h4 class="mb-3 f-w-400">LOGIN</h4>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"" placeholder="Email address" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i data-feather="lock"></i></span>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"" placeholder="Password" required>
                                                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button class="btn btn-block btn-primary mb-4">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('backend/assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/feather.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/pcoded.min.js') }}"></script>
</body>
</html>
