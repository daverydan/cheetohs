<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Laravel') }} {{ isset($title) ? '| ' . $title : '' }}
    </title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- Alpine.js --}}
    <script defer src="https://unpkg.com/alpinejs@3.7.1/dist/cdn.min.js"></script>

    <style>
        @font-face {
            font-family: "Cheetohs";
            src: url({{ asset('./fonts/Monthoers.ttf') }}) format("truetype");
        }

        .title {
            font-family: 'Cheetohs', Arial, sans-serif;
            font-weight: normal;
            font-style: normal;
        }
    </style>

    <!-- Custom Page Styles -->
    @yield('styles')
</head>

<body class="font-sans antialiased selection:bg-gold selection:text-white" x-cloak>
    <div class="min-h-screen bg-gray-100">
        <!-- Menu -->
        <x-nav.menu />

        <!-- Page Content -->
        <main class="main" id="app">
            {{-- {{ $slot }} --}}
            @yield('content')
        </main>
    </div>

    <!-- Custom Page Scripts -->
    @yield('scripts')
</body>

</html>
