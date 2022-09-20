<!DOCTYPE html>
<html lang="en">

<head>

    <title>Register to Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="icon" href="https://i.postimg.cc/D0hrDm6G/favicon.png" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/material.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}" id="main-style-link">

</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <img src="https://i.postimg.cc/B6nsCC9P/logo.png" alt="Toto Abadi" class="img-fluid mb-4" width="120" height="50">
                        <h4 class="mb-3 f-w-400">Silakan klik tombol bawah utk login</h4>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-block f-w-400 text-white">Login</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="{{ asset('backend/assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/feather.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/pcoded.min.js') }}"></script>

</body>

</html>
