<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app/framework.css') }}">
    <link rel="stylesheet" href="@yield('css-style')">
</head>

<body>
    <nav class="navbar navbar-expand-lg  bg-white">
        <div class="container-fluid" default-position>
            <a class="navbar-brand" href="#"><img style="width:50px; height:50px"src="{{ asset('assets/app/logo/book-logo.svg') }}" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" {{ request()->routeIs('dashboard') ? 'active' : '' }}>
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item" {{ request()->routeIs('teste') ? 'active' : '' }}>
                        <a class="nav-link" href="{{ route('teste') }}">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <div class="dropdown-center">
                        <p class="dropdown-toggle mb-0" data-bs-toggle="dropdown" aria-expanded="false">
                          {{Auth::user()->name}}
                        </p>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Action two</a></li>
                          <li><a class="dropdown-item" href="#">Action three</a></li>
                        </ul>
                    </div>
                </span>
            </div>
        </div>
    </nav>
    <header class="bg-white mb-5 shadow-sm p-2">
        <h4 class='container-fluid' default-position>@yield('page')</h4>
    </header>
    @yield('content')
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="{{ asset('js/app/global.js') }}"></script>
