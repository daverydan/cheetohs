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

<body class="font-sans antialiased selection:bg-gold selection:text-white h-screen" x-cloak>
    <div class="bg-gray-100 h-full">
        <!-- Menu -->
        <x-nav.menu />

        <!-- Page Content -->
        {{-- @if (strpos(url()->current(), 'dashboard') == true)
            <main x-data="{ addCat: false }" class="main bg-black h-full pt-20">
                <x-site-width>
                    @yield('content')
                </x-site-width>
            </main>
        @else --}}
        <main class="main flex flex-col md:flex-row bg-black h-full">
            <div class="mt-20 mb-5 px-8 w-full md:w-72 border-0 md:border-r">
                <p class="text-white m-0">Admin Menu</p>
                <a href="/queens"
                    class="text-white px-3 py-2 border rounded block my-2 hover:text-black hover:bg-white transition duration-200 ease-in-out {{ request()->routeIs('/queens') ? 'text' : '' }}">
                    Queens
                </a>
                <a href="/kings"
                    class="text-white px-3 py-2 border rounded block my-3 hover:text-black hover:bg-white transition duration-200 ease-in-out">
                    Kings
                </a>
                <a href="/kittens"
                    class="text-white px-3 py-2 border rounded block my-2 hover:text-black hover:bg-white transition duration-200 ease-in-out">
                    Kittens
                </a>

                <p class="text-white mt-5 mb-2">Actions</p>
                <a href="/cat/create"
                    class="block w-full text-white bg-gold border border-gold font-bold px-6 py-2 hover:bg-transparent hover:text-gold hover:border-gold trasnsition duration-200 ease-in-out mb-3">
                    <i class="fa fa-plus"></i>
                    Add a Cat
                </a>
                <a href="/litter/create"
                    class="block w-full text-white bg-gold border border-gold font-bold px-6 py-2 hover:bg-transparent hover:text-gold hover:border-gold trasnsition duration-200 ease-in-out mb-8">
                    <i class="fa fa-plus"></i>
                    Add a Litter
                </a>
            </div>
            <div class="flex-1 md:py-20 px-8">
                <h1 class="text-white text-3xl font-bold">Admin Dashboard</h1>
                <hr class="my-2">

                <div class="flex mb-8">
                    <h2 class="text-white text-xl font-bold">Welcome, {{ auth()->user()->name }}</h2>
                    <form action="/logout" method="POST" class="mr-2">
                        @csrf
                        <button type="submit"
                            class="border bg-red-600 border-red-600 text-white hover:text-red-600 px-2 pt-1 pb-2 hover:bg-transparent flex justify-center items-center rounded transition duration-200 ease-in-out ml-2">
                            Logout
                        </button>
                    </form>
                </div>

                @yield('content')
            </div>
        </main>
        {{-- @endif --}}
    </div>

    <!-- Custom Page Scripts -->
    @yield('scripts')
</body>

</html>
