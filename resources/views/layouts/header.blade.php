<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center HTML5 Template</title>
    {{-- <link rel="stylesheet" href="../assets/css/maicons.css"> --}}

    <link rel="stylesheet" href=" {{asset('/css/maicons.css')}} ">

    {{-- <link rel="stylesheet" href="../assets/css/bootstrap.css"> --}}
    <link rel="stylesheet" href=" {{asset('/css/bootstrap.css')}} ">

    {{-- <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css"> --}}
    <link rel="stylesheet" href=" {{asset('/vendor/owl-carousel/css/owl.carousel.css')}} ">

    <link rel="stylesheet" href=" {{asset('/vendor/animate/animate.css')}} ">
    {{-- <link rel="stylesheet" href="../assets/vendor/animate/animate.css"> --}}

    <link rel="stylesheet" href=" {{asset('/css/theme.css')}} ">
    {{-- <link rel="stylesheet" href="../assets/css/theme.css"> --}}

    {{-- custom css --}}
    <link rel="stylesheet" href=" {{asset('/css/style.css')}} ">

</head>
<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>
    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{route('health.index')}}"><span class="text-primary">One</span>-Health</a>

                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link {{  request()->routeIs('health.index') || request()->routeIs('index') ? 'active' : '' }}" href="{{route('health.index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{  request()->routeIs('health.about') ? 'active' : '' }}" href="{{route('health.about')}}">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{  request()->routeIs('health.doctors') ? 'active' : '' }}" href="{{route('health.doctors')}}">Doctors</a>
                        </li>

                        <li class="nav-item {{  request()->routeIs('health.blogs') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('health.blogs')}}">News</a>
                        </li>
                        <li class="nav-item {{  request()->routeIs('health.contact') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('health.contact')}}">Contact</a>
                        </li>
                        <li class="nav-item  {{  request()->routeIs('heath.itemIndex') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('heath.itemIndex')}}">Items</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="#">Login / Register</a>
                        </li>
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>
