<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            {{ trans('panel.site_title') }}
        </title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
        <!-- Fonts and icons -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <!-- CSS Files -->
        @vite(['resources/sass/app.scss'])
        <link href="{{ asset('css/now-ui-dashboard.min.css') }}" rel="stylesheet" />
        @yield('styles')
    </head>

    <body>
        <div class="wrapper">
            <div class="wrapper wrapper-full-page bg-dark" style="background-image: url(@if (request()->is('register')) {{ asset('img/auth/register.jpg') }} @else {{ asset('img/auth/login.jpg') }} @endif); background-blend-mode: multiply; background-repeat: no-repeat; background-size: cover; background-position: center center;"">
                <nav class="navbar navbar-expand-lg navbar-transparent bg-primary navbar-absolute">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="navbar-nav">
                                <li class="nav-item @if (request()->is('register')) active @endif">
                                    <a href="{{ route('register') }}" class="nav-link">
                                        <i class="now-ui-icons tech_mobile"></i> {{ __("Register") }}
                                    </a>
                                </li>
                                <li class="nav-item @if (request()->is('login')) active @endif ">
                                    <a href="{{ route('login') }}" class="nav-link">
                                        <i class="now-ui-icons users_circle-08"></i> {{ __("Login") }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="full-page section-image">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Core JS Files -->
        @vite(['resources/js/app.js'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/perfect-scrollbar/1.5.5/perfect-scrollbar.min.js" integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('js/now-ui-dashboard.min.js') }}" type="text/javascript" defer></script>
        @yield('scripts')
    </body>
</html>
