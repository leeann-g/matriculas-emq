<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @media print{
            .no-print{
                display: none !important;
            }
            .footer-print{
                color:red;
                font-family: bold;
                font-size: 10px;
            }
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">

    <div class="no-print">
         @include('partials.header')
    </div>

    <div class="no-print">
        @include('partials.nav')
    </div>

    <main class="flex-1">
        @yield('content')
    </main>

    <div class="footer-print">
        @include('partials.footer')
    </div>

</body>
</html>