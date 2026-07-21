<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col">

    @include('partials.header')

    @include('partials.nav')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>