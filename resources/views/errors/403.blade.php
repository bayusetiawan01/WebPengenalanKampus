<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mipa Bersatu</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('/images/icons/favicon.ico') }}" type="image/x-icon">
    <!-- Custom CSS -->
    <link href="{{ asset('/css/style.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="error-box">
            <div class="error-body text-center">
                <h1 class="error-title text-danger">403</h1>
                <h3 class="text-uppercase error-subtitle">Akses Dilarang !</h3>
                <p class="text-muted m-t-30 m-b-30">Kamu tidak memiliki akses ke halaman ini.</p>
                <a href="/login" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40">Kembali</a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('/vendor/admin-jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('/js/app.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
    </script>
</body>

</html>