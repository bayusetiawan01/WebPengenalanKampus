<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mipa Bersatu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#b22222">
    <meta name="msapplication-TileColor" content="#b22222">
    <meta name="msapplication-navbutton-color" content="##b22222">
    <meta name="apple-mobile-web-app-status-bar-style" content="#b22222">
    <link rel="icon" type="image/png" href="{{ asset('/images/icons/favicon.ico') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/auth_util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/auth_main.css') }}">
</head>

<body>

    <!-- Bagian isi Auth Login atau Register -->
    @yield('isi')

    <script src="{{ asset('/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="{{ asset('/js/auth_main.js') }}"></script>

</body>

</html>