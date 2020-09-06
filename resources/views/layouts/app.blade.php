<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'App') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('build/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('build/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <navbar role="{{ $user_role }}" style="height: 80px;"></navbar>

        <main class="min-h-screen" style="padding-top: 80px;">
            @yield('content')
        </main>

    </div>
</body>
</html>
