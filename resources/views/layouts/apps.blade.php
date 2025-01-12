<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Wirtualna Adopcja')</title>
        {{-- Sekcja na style specyficzne dla strony --}}
        @yield('styles')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
        
    <body>
        @include('partials.header') {{-- Wstawia header --}}
        
        <main>
            @yield('content') {{-- Tutaj będzie wstawiana unikalna treść --}}
        </main>
        
        @include('partials.footer') {{-- Wstawia footer --}}
    </body>
</html>
