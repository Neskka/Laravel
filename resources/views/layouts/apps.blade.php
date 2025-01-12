<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Wirtualna Adopcja')</title>
        @yield('styles')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
        
    <body>
        @include('partials.header') 
        
        <main>
            @yield('content') 
        </main>
        
        @include('partials.footer') 
    </body>
</html>
