<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Synergy Eight</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/themify-icons/themify-icons.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css') }}">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/Venobox/venobox.css') }}">
    <!-- aos -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.css') }}">

    <!-- Main Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

</head>

<body>


    <!-- navigation -->
    <section class="fixed-top navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route('landingpage.view') }}"><img
                        src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- navbar -->
                <div class="collapse navbar-collapse text-center" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('landingpage.view') ? 'active' : '' }}"
                                href="{{ route('landingpage.view') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('aboutus.view') ? 'active' : '' }}"
                                href="{{ route('aboutus.view') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('services.view') ? 'active' : '' }}"
                                href="{{ route('services.view') }}">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('contactus.view') ? 'active' : '' }}"
                                href="{{ route('contactus.view') }}">Contact</a>
                        </li>
                    </ul>
                    {{-- <a href="#" class="btn btn-primary ml-lg-3 primary-shadow">Try Free</a> --}}
                </div>
            </nav>
        </div>
    </section>
    <!-- /navigation -->
