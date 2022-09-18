<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://i.postimg.cc/Gh840G1S/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Mbah Gendeng AH Pamungkas</title>

    @stack('css')
</head>

<body style="background-image: url(https://i.postimg.cc/WpSsBG8P/cta-bg.jpg); background-repeat: no-repeat; background-size: cover;">
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('js')
</body>

</html>