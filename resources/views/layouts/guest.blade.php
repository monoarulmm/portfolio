<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/fff.png">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('title')</title>

    <!-- auth CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/core.css" class="template-customizer-core-css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css" class="template-customizer-theme-css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/page-auth.css') }}" />


    <!-- Core CSS -->
    <link rel="stylesheet" href="Admin/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="Admin/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="Admin/css/demo.css" />
</head>

<body class="bg-black">

    {{ $slot }}

</body>

</html>
