<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Менеджер задач - @yield('title')</title>

        <!-- CSRF -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/js/app.js'])
        @endif
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">Менеджер задач</a>
                    <button class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="{{ @route('home')  }}" class="nav-link active" aria-current="page">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Задачи</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Справка</a>
                            </li>
                            @if(Route::has('login'))
                                @auth
                                    <li><a href="{{ @route('logout') }}">Выйти</a></li>
                                @else
                                    <li><a href="{{ @route('login') }}">Войти</a></li>
                                    @if (Route::has('register'))
                                        <li><a href="{{ @route('register') }}">Регистрация</a></li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="container mx-auto mt-10 lg:mt-20">
            <div class="row">
                <div class="col-md-12">
                    <h1>@yield('header')</h1>
                </div>
            </div>
            @yield('content')
        </main>
    </body>
</html>
