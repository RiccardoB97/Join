<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Join</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    </head>
    <body>
        {{-- Site header --}}
        <header>
            <div class="content">
                <nav class="guest_navbar navbar navbar-default">
                    <div class="title m-b-md ">
                        <a href="{{route('welcome')}}" class="navbar-brand">
                            JOIN
                        </a>
                    </div>
                    <div class="links d-flex justify-content-between">
                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                {{-- <a href="https://laravel.com/docs">Docs</a>
                                <a href="https://laracasts.com">Laracasts</a>
                                <a href="https://laravel-news.com">News</a>
                                <a href="https://blog.laravel.com">Blog</a>
                                <a href="https://nova.laravel.com">Nova</a>
                                <a href="https://forge.laravel.com">Forge</a>
                                <a href="https://vapor.laravel.com">Vapor</a>
                                <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </div>
                </nav>
            </div>
        </header>
        {{-- /Site header --}}

        {{-- Site main --}}
        <main>
            <div class="jumbotron p-0 d-flex align-items-center justify-content-center">
                @if (Route::has('login'))
                @auth
                    <span class="jumbo-btn">
                        <a class="btn" href=''></a>    
                    </span>
                @else
                    <span class="jumbo-btn">
                        <a class="btn" href=''></a>    
                    </span> 
                @endif
                @endauth
            </div>

        </main>
        {{-- /Site main --}}
    </body>
</html>
