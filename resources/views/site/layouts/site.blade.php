<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/site/global.css') }}">
    <link rel="stylesheet" href="@yield('css-style')">
    @vite(['resources/js/app.js'])
</head>

<body>
    <header class="shadow-sm"">
        <div class="container-header px-3" default-position>
            <a href="{{ route('site.home') }}" class="logo"><img style="width: 150px"src="{{ asset('assets/app/logo/logo2.svg') }}" alt="Logo"</a>
                <ul class="menu-nav">
                    <li class="menu-item mx-1" {{ request()->routeIs('site.home') ? 'active-menu' : '' }}>
                        <a class="py-3 px-2" href="{{ route('site.home') }}">Início</a>
                    </li>
                    <li class="menu-item mx-1" {{ request()->routeIs('site.sobre') ? 'active-menu' : '' }}>
                        <a class="py-3 px-2" href="{{ route('site.sobre') }}">Sobre</a>
                    </li>
                    <li class="menu-item mx-1" {{ request()->routeIs('site.cursos') ? 'active-menu' : '' }}>
                        <a class="py-3 px-2" href="{{ route('site.cursos') }}">Cursos</a>
                    </li>
                    <li class="menu-item mx-1" {{ request()->routeIs('site.blog') ? 'active-menu' : '' }}>
                        <a class="py-3 px-2" href="{{ route('site.blog') }}">Blog</a>
                    </li>
                    <li class="menu-item mx-1" {{ request()->routeIs('site.contato') ? 'active-menu' : '' }}>
                        <a class="py-3 px-2" href="{{ route('site.contato') }}">Contato</a>
                    </li>
                </ul>
                <a href="{{ route('login') }}" class="btn-login px-4 py-2">Login</a>
                <div class="btn-mobile">
                    <button><i class="bi bi-list menu-open"></i><i class="bi bi-x-lg menu-close"></i></button>
                </div>
        </div>
        <div class="container-mobile-header p-3 shadow-sm">
            <ul class="mobile-nav">
                <li class="menu-item my-2" {{ request()->routeIs('site.home') ? 'active-menu' : '' }}>
                    <a class="py-3 px-2" href="{{ route('site.home') }}">Início</a>
                </li>
                <li class="menu-item my-2" {{ request()->routeIs('site.sobre') ? 'active-menu' : '' }}>
                    <a class="py-3 px-2" href="{{ route('site.sobre') }}">Sobre</a>
                </li>
                <li class="menu-item my-2" {{ request()->routeIs('site.cursos') ? 'active-menu' : '' }}>
                    <a class="py-3 px-2" href="{{ route('site.cursos') }}">Cursos</a>
                </li>
                <li class="menu-item my-2" {{ request()->routeIs('site.blog') ? 'active-menu' : '' }}>
                    <a class="py-3 px-2" href="{{ route('site.blog') }}">Blog</a>
                </li>
                <li class="menu-item my-2" {{ request()->routeIs('site.contato') ? 'active-menu' : '' }}>
                    <a class="py-3 px-2" href="{{ route('site.contato') }}">Contato</a>
                </li>
            </ul>
            <a href="{{ route('login') }}" class="btn-login-mobile px-4 py-2">Login</a>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="container-footer px-2 pt-5" default-position>
            <div class="logo">
                <a href="{{ route('site.home') }}" class="img-logo"><img src="{{ asset('/assets/app/logo/logo.svg') }}" alt=""></a>
            </div>

            <div class="links">
                <p class="footer-title">Links Úteis</p>
                <ul class="menu-nav">
                    <li class="menu-item my-1">
                        <a href="{{ route('site.home') }}">Início</a>
                    </li>
                    <li class="menu-item my-1">
                        <a href="{{ route('site.sobre') }}">Sobre</a>
                    </li>
                    <li class="menu-item my-1">
                        <a href="{{ route('site.cursos') }}">Cursos</a>
                    </li>
                    <li class="menu-item my-1">
                        <a href="{{ route('site.blog') }}">Blog</a>
                    </li>
                    <li class="menu-item my-1">
                        <a href="{{ route('site.contato') }}">Contato</a>
                    </li>
                </ul>
            </div>

            <div class="container-social">
                <p class="footer-title">Mídias Sociais</p>
                <div class="links">
                    <a target="_blank" href='https://www.facebook.com/CETDABAR/' class="item-social me-2 shadow"><i class="bi bi-facebook"></i></a>
                    <a target="_blank" href='https://www.instagram.com/fabio.dabaroficial/' class="item-social mx-2 shadow"><i class="bi bi-instagram"></i></a>
                    <a target="_blank" href='https://www.youtube.com/channel/UCXieQGFmE_MwiaA6T9qlyEQ' class="item-social mx-2 shadow"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <div class="contato-dabar">
                <p class="footer-title">Contato</p>
                <div class="content-contato ps-2">
                    <div class="item-contato">
                        <span>cetdabar@gmail.com</span>
                    </div>
                    <div class="item-contato mt-2">
                        <span>(11) 2891-8736</span>
                    </div>
                    <div class="item-contato mt-2">
                        <span>Av. Deputado Castro de Carvalho, 1695, Vila Áurea, Poá, SP</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-footer-mobile px-3 pt-4 pb-3" default-position>
            <div class="logo">
                <a href="{{ route('site.home') }}" class="img-logo"><img src="{{ asset('/assets/app/logo/logo.svg') }}" alt=""></a>
            </div>

            <div class="links mt-3">
                <p class="footer-title">Links Úteis</p>
                <ul class="menu-nav">
                    <li class="menu-item my-1">
                        <a href="{{ route('site.home') }}">Início</a>
                    </li>
                    <li class="menu-item my-1">
                        <a href="{{ route('site.sobre') }}">Sobre</a>
                    </li>
                    <li class="menu-item my-1">
                        <a href="{{ route('site.cursos') }}">Cursos</a>
                    </li>
                    <li class="menu-item my-1">
                        <a href="{{ route('site.blog') }}">Blog</a>
                    </li>
                    <li class="menu-item my-1">
                        <a href="{{ route('site.contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
            
            <div class="container-social mt-3">
                <p class="footer-title">Mídias Sociais</p>
                <div class="links">
                    <a target="_blank" href='https://www.facebook.com/CETDABAR/' class="item-social me-2 shadow"><i class="bi bi-facebook"></i></a>
                    <a target="_blank" href='https://www.instagram.com/fabio.dabaroficial/' class="item-social mx-2 shadow"><i class="bi bi-instagram"></i></a>
                    <a target="_blank" href='https://www.youtube.com/channel/UCXieQGFmE_MwiaA6T9qlyEQ' class="item-social mx-2 shadow"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <div class="contato-dabar mt-3">
                <p class="footer-title">Contato</p>
                <div class="content-contato ps-2">
                    <div class="item-contato">
                        <span>cetdabar@gmail.com</span>
                    </div>
                    <div class="item-contato mt-2">
                        <span>(11) 2891-8736</span>
                    </div>
                    <div class="item-contato mt-2">
                        <span>Av. Deputado Castro de Carvalho, 1695, Vila Áurea, Poá, SP</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

<script type="module" src="{{ asset('js/site/global.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
