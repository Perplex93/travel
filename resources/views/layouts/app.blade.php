<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css" />
    
    <title>@yield('title')</title>

    <script src="{{ asset('js/app.js') }}" defer></script>


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .navbar{
            background-color: burlywood;
        }

        footer{
            background-color: burlywood;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Tarvel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">

                        @permission('administrator')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('permissions.index')}}">Permissions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('users.index')}}">Users</a>
                        </li>
                        @endpermission
                    </ul>


                    <ul class="navbar-nav ml-auto">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/destination">Reiseziel und Unterkünfte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/learn">Reisen und Lernen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/people">Personen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Kontakt</a>
                        </li>
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p><strong>Reisende</strong></p>
                    <a href="#">Gastgeber finden</a>
                    <br>
                    <a href="#">Informationen für Gastgeber</a>
                    <br>
                    <a href="#">Informationen für Reisende</a>
                    <br>
                    <a href="#">Als Reisender registrieren</a>
                    <br>
                    <a href="#">Als Gastgeber registrieren</a>
                </div>
                <div class="col-sm-3">
                    <p><strong>Community</strong></p>
                    <a href="#">Reise Blog</a>
                    <br>
                    <a href="#">Reise Fotogalerie</a>
                    <br>
                    <a href="#">Unsere Mission</a>
                    <br>
                </div>
                <div class="col-sm-3">
                    <p><strong>Informationen</strong></p>
                    <a href="#">Helpdesk</a>
                    <br>
                    <a href="#">Sicherheit</a>
                    <br>
                    <a href="#">FAQ</a>
                    <br>
                    <a href="#">Versicherung</a>
                    <br>
                    <a href="#">AGB</a>
                    <br>
                    <a href="#">Datenschutz</a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>