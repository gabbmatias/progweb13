<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PreservSign') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&family=Cookie&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/topnav-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plans-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/address-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/subscription-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registerplans-styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="topnav" id="myTopnav">
        <a class="navbar-logo" href="{{ route('home') }}">PreservSign</a>
        <a href="{{ route('plans') }}">PLANOS</a>
        <a href="{{ route('about') }}">SOBRE</a>
        <a href="{{ route('contact') }}">CONTATO</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">

                @guest
                <div class="top-nav-opt">
                    <a class="top-nav-login" href="{{ route('login') }}">LOGIN</a>
                </div>

                <a class="top-nav-opt" href="{{ route('register') }}">
                    <div class="sign-background">
                        <div class="top-nav-sign">
                            ASSINE!
                        </div>
                    </div>
                </a>

                @if (Route::has('register'))
                @endif
                @else
                <div class="top-nav-dropdown top-nav-logged test-class">
                    <button class="top-nav-dropbtn">OLÁ, <?= strtoupper(explode(' ', Auth::user()->name)[0]) . " " . "<i class='fas fa-angle-down'></i>" ?></button>
                    <div class="top-nav-dropdown-content">
                        <a href="{{ route('profile') }}">
                            {{ __('Perfil') }}
                        </a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                            {{ __('Minhas Assinaturas') }}
                        </a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest

            </li>

        </ul>

    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    <script src="js/bootstrap.min.js"></script>

    @yield('content')

</html>