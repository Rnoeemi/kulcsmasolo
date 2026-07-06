<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('seo.brand'))</title>

    @include('partials.seo')
    @include('partials.structured-data')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col">
    @include('partials.header')

    <main class="flex-1" id="main-content">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
