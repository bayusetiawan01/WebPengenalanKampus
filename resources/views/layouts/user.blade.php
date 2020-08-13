<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="theme-color" content="#b22222">
    <meta name="msapplication-TileColor" content="#b22222">
    <meta name="msapplication-navbutton-color" content="##b22222">
    <meta name="apple-mobile-web-app-status-bar-style" content="#b22222">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Mipa Bersatu</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('/images/icons/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="{{ asset('/fonts/roboto/roboto.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/fonts/material-icon/material.css') }}" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('/vendor/bootstrap-admin/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('/vendor/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('/vendor/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('/vendor/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="{{ asset('/vendor/dropzone/dropzone.css') }}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar" style="background-color: firebrick;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand">MIPA BERSATU</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">2</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu" style="list-style-type: none;">
                                    <li>
                                        <a href="https://bit.ly/FormTambahanAgamaIslam" target="_blank">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">assignment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Form Tambahan Untuk Islam</h4>
                                                <p>
                                                    <i class="material-icons">assignment</i> Jangan lupa diisi ya
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://bit.ly/FaqMB2020" target="_blank">
                                            <div class="icon-circle bg-green">
                                                <i class="material-icons">assignment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>FAQ Mipa Bersatu 2020</h4>
                                                <p>
                                                    <i class="material-icons">assignment</i> Dibaca juga ya
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);"></a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar" style="top: 60px;">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ url('/images/profile/' . $foto) }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$nama}}</div>
                    <div class="email">{{$email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="/user/profile/"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="/user/password/"><i class="material-icons">lock</i>Ubah Password</a></li>
                            <li role="separator" class="divider"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li>
                        <a href="/user">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/user/materi">
                            <i class="material-icons">view_carousel</i>
                            <span>Daftar Materi</span>
                        </a>
                    </li>
                    <li>
                        <a href="/user/tugas">
                            <i class="material-icons">assignment</i>
                            <span>Daftar Tugas</span>
                        </a>
                    </li>
                    <li>
                        <a href="/user/kuis">
                            <i class="material-icons">assignment_ind</i>
                            <span>Daftar Kuis</span>
                        </a>
                    </li>
                    <li>
                        <a href="/user/pemetaan">
                            <i class="material-icons">assignment</i>
                            <span>Pemetaan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/logout">
                            <i class="material-icons">input</i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <!-- #Start# Section Isi -->
    @yield('isi')

    <!-- Jquery Core Js -->
    <script src="{{ asset('/vendor/admin-jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('/vendor/bootstrap-admin/js/bootstrap.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('/vendor/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('/vendor/node-waves/waves.js') }}"></script>

    <!-- Ckeditor -->
    <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{ asset('/vendor/autosize/autosize.js') }}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{ asset('/vendor/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{ asset('/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('/js/admin.js') }}"></script>
    <script src="{{ asset('/js/pages/index.js') }}"></script>
    <script src="{{ asset('/js/pages/forms/editors.js') }}"></script>
    <script src="{{ asset('/js/pages/forms/basic-form-elements.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('/js/demo.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('/vendor/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('/vendor/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('/vendor/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('/vendor/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('/vendor/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('/vendor/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('/vendor/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('/vendor/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>

</body>

</html>