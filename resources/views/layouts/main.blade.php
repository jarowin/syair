<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://i.postimg.cc/D0hrDm6G/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Mbah Gendeng AH Pamungkas</title>

    <style type="text/css">
        main>.container {
            padding: 60px 15px 0;
        }
    </style>
    @stack('css')
</head>

<body
    style="background-image: url(https://i.postimg.cc/WpSsBG8P/cta-bg.jpg); background-repeat: no-repeat; background-size: cover;"
    class="d-flex flex-column h-100">

    <header>
    @include('layouts.navbar')
    </header>
    
    <main class="flex-shrink-0">
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    @stack('js')
</body>

</html>