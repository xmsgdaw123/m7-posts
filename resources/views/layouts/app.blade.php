<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header>
            <div>
                <a class="navbar-brand" href="{{ url('/') }}">Posts App</a>
            </div>
            <nav class="header-nav">
                @guest
                <div>
                    <a class="dropdown-item" href="{{ route('login') }}">Entrar</a>
                </div>
                @if (Route::has('register'))
                <div>
                    <a class="dropdown-item" href="{{ route('register') }}">Crear cuenta</a>
                </div>
                @endif
                @else
                <form action="{{ route('search') }}" method="POST">
                    @csrf @method('POST')
                    <input class="search-input" type="text" name="filter" placeholder="Buscar post...">
                </form>
                <a href="{{ route('posts.create') }}" class="create-post-btn">Crear post</a>
                <a id="navbarDropdown href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->username ?? 'Nobody' }}
                </a>
                <a class="dropdown-item" href="{{ route('profile') }}">Mi perfil</a>
                @if (Auth::user()->isAdmin(Auth::user()))
                <a class="dropdown-item" href="{{ route('admin') }}">Admin</a>
                @endif

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar sesión</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endguest
            </nav>


        </header>

        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>