<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#b22222">
    <meta name="msapplication-TileColor" content="#b22222">
    <meta name="msapplication-navbutton-color" content="##b22222">
    <meta name="apple-mobile-web-app-status-bar-style" content="#b22222">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Mipa Bersatu</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('/images/icons/favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|IBM+Plex+Sans:600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/landing/css/style.css') }}">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header" style="padding:0">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <img class="asset-light" src="{{ asset('/landing/images/logo-light.svg') }}" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">
                            <h1 class="hero-title mt-0">Apa itu MIPA Bersatu?</h1>
                            <p class="hero-paragraph">MIPA Bersatu 2020 merupakan acara pengenalan kehidupan kampus mahasiswa baru (PKKMB) dari FMIPA Unpad.</p>
                            <div class="hero-cta">
                                <a class="button button-primary" style="border-radius:25px; background:#ee8a2c" href="{{url('/login')}}">Ikuti Lebih Lanjut!</a>
                                <div class="lights-toggle">
                                    <input id="lights-toggle" type="checkbox" name="lights-toggle" class="switch" checked="checked">
                                </div>
                            </div>
                        </div>
                        <div class="hero-media">
                            <div class="header-illustration">
                                <img class="header-illustration-image asset-light" src="{{ asset('/landing/images/header-illustration-light.svg') }}" alt="Header illustration">
                            </div>
                            <div class="hero-media-illustration">
                                <img class="hero-media-illustration-image asset-light" src="{{ asset('/landing/images/hero-media-illustration-light.svg') }}" alt="Hero media illustration">
                            </div>
                            <div class="hero-media-container">
                                <img class="hero-media-image asset-light" src="{{ asset('/landing/images/hero-media-light.svg') }}" alt="Hero media">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
                    <div class="features-inner section-inner has-bottom-divider">
                        <div class="features-header text-center">
                            <div class="container-sm">
                                <h2 class="section-title mt-0">Filosofi Logo</h2>
                                <div class="features-image">
                                    <img class="features-illustration asset-light" src="{{ asset('/landing/images/features-illustration-light.svg') }}" alt="Feature illustration">
                                    <img class="features-box asset-light" src="{{ asset('/landing/images/features-box-light.svg') }}" alt="Feature box">
                                    <img class="features-illustration asset-light" src="{{ asset('/landing/images/features-illustration-top-light.svg') }}" alt="Feature illustration top">
                                </div>
                            </div>
                        </div>
                        <div class="features-wrap">
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img class="asset-light" src="{{ asset('/landing/images/feature-01-light.svg') }}" alt="Feature 01">
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="feature-title mt-0">Sembilan Cahaya</h3>
                                        <p class="text-sm mb-0">Merepresentasikan sembilan himpunan di FMIPA Unpad yang saling berkolaborasi. Serta bersatu untuk bersama-sama memantik api semangat berprestasi dan dapat memancarkan cahaya yang indah.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img class="asset-light" src="{{ asset('/landing/images/feature-02-light.svg') }}" alt="Feature 02">
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="feature-title mt-0">Api</h3>
                                        <p class="text-sm mb-0">Menunjukkan semangat yang membara mahasiswa FMIPA Unpad yang bersatu dan berkarya, sehingga dapat memancarkan sinar terang bagi almamater serta bangsa dan negara.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img class="asset-light" src="{{ asset('/landing/images/feature-03-light.svg') }}" alt="Feature 03">
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="feature-title mt-0">Kujang</h3>
                                        <p class="text-sm mb-0">Sebagai sepresentasi Universitas Padjadjaran yang berada di tanah Sunda, Jawa Barat. Serta lambang kebanggaan mahasiswa Universitas Padjadjaran</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cta section">
                <div class="container-sm">
                    <div class="cta-inner section-inner">
                        <div class="cta-header text-center">
                            <h2>#ImaginationIgniteCreation <br> #BaraSemangatKarya</h2>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer has-top-divider">
            <div class="container">
                <div class="site-footer-inner">
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('/landing/js/main.min.js') }}"></script>
</body>

</html>