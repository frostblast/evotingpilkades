<!DOCTYPE html>
<html x-data="data" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Voting') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/init-alpine.js') }}"></script>
    </head>
    <body>
    <div class="parent md:h-screen md:grid md:grid-cols-6">
        <!-- Desktop sidebar -->
        <section class="sidebar bg-blue-500 md-col-span-1">
            @include('layouts.step')
        </section>
        <!-- Backdrop -->
    
            <main class="main md:col-span-5 bg-yellow-300">
                @yield('content')
            </main>
        </div>  
        
    </div>
</div>
    </body>
</html>