<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chef Site</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/scss/main.scss','resources/js/app.js'])

</head>

<body>
    <header class="primary-header margin-block-start-24">
        <img class="logo mx-auto" src="/images/logo.svg" alt="Logo">
        </div>
        <nav class="primary-navigation margin-block-start-24">
            <ul class="flex-group mx-auto">
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#meals">Meals</a>
                </li>
                <li>
                    <a href="#testimonials">Testimonials</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>


    <footer class="primary-footer section bg-neutral-900 clr-neutral-100 text-center">
        <div class="container flow">
            <p class="fw-bold">A goog place for soma basic footer informations</p>
            <p>Copyright 2002 Chief Services</p>
            <p>555 via Santa Giovanna d'Antida, 23 - 25030 Rudiano (BS) - Italy</p>
        </div>
        </section>

    </footer>
</body>

</html>