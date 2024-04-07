<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="container">
        @include('layouts.navigation')
    </header>

    <!-- Page Heading -->
    @if (isset($header))
        <header>
            <div>
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main class="container">
        {{ $slot }}
    </main>
</body>

</html>
