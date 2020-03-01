<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel React - Lading page </title>
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

</head>
<body>
<div id="page-container">
    <div id="header" class="header navbar navbar-expand-md navbar-transparent fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="/" class="navbar-brand">
                    <img src="/images/laravel-react.png" alt="Laravel React App" class="brand-image">
                    </span>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
            <div class="collapse navbar-collapse" id="header-navbar">

                <ul class="nav navbar-nav ml-md-auto">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item"><a href="/app" class="nav-link" data-click="scroll-to-target">Dashboard</a></li>
                        @else
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link" data-click="scroll-to-target">LOGIN</a></li>

                            @if (Route::has('register'))
                                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link" data-click="scroll-to-target">REGISTER</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
    <div id="home" class="content has-bg home" style="height: 944px;">
        <!-- begin content-bg -->
        <div class="content-bg">
            <img src="/images/home-bg.png" alt="Home">
        </div>
        <!-- end content-bg -->
        <!-- begin container -->
        <div class="container home-content">
            <h1>Welcome to LaraReact</h1>
            <h3>A demo application</h3>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="row">
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <div class="info">
                            <h4 class="title">Laravel</h4>
                            <p class="desc">Laravel API with Passport is used as backend with MySQL</p>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <div class="info">
                            <h4 class="title">React</h4>
                            <p class="desc">React frontend is used after interacting with backend</p>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <div class="info">
                            <h4 class="title">Bootstrap</h4>
                            <p class="desc">Bootstrap theme used style the contents</p>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
            </div>
        </div>
        <!-- end container -->
    </div>
</div>
</body>
</html>
