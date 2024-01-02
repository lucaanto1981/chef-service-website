<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/scss/main.scss','resources/js/app.js'])

</head>

<body>
    <header class="container">
        <div class="logo">
            <a class="" href="{{ url('/') }}">
                <img src="/images/logo.svg" alt="Logo small GIVE">
            </a>
        </div>
        <nav>
            <ul class="flex-group uppercase">
                <li>
                    <a href="{{ url('/pagina1/') }}">Pagina 1</a>
                </li>
                <li>
                    <a href="{{ url('/pagina2/') }}">Pagina 2</a>
                </li>
                <li>
                    <a href="{{ url('/pagina3/') }}">Pagina 3</a>
                </li>
                <li>
                    <a href="{{ url('/pagina4/') }}">Pagina 4</a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>

    </footer>
</body>

</html>