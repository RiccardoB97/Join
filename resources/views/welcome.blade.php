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
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

        {{-- Font awesome --}}
        <script src="https://kit.fontawesome.com/1d47f7a9f5.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    </head>
    <body>
        {{-- Site header --}}
        <header>
            <div class="content">
                <nav class="guest_navbar navbar">
                    <div class="title m-b-md ">
                        <a href="{{route('welcome')}}" class="navbar-brand">
                            Join
                        </a>
                    </div>
                    <div class="links d-flex justify-content-between">
                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
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
            {{-- Jumbotron --}}
            <div class="jumbotron p-0 d-flex flex-column">
                <div class="jumbo-txt">
                    <ul>
                        <li>
                            <h1>
                                Meet people.
                            </h1>
                        </li>
                        <li>
                            <h1>
                                Have experiences.
                            </h1>
                        </li>
                        <li>
                            <h1>
                                Make memories.
                            </h1>
                        </li>
                    </ul>
                </div>
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
            <div class="white_bar"></div>
            {{-- /Jumbotron --}}
            <div class="cards">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card text-left">
                                          <img class="card-img-top" src="holder.js/100px180/" alt="">
                                          <div class="card-body">
                                            <h4 class="card-title"><i class="fas fa-users"></i> Meet people </h4>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quod, dolore porro debitis impedit mollitia ipsa beatae officia voluptas autem.
                                            </p>
                                            <a href="{{route('register')}}">Register <i class="fas fa-arrow-right"></i></a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card text-left">
                                          <img class="card-img-top" src="holder.js/100px180/" alt="">
                                          <div class="card-body">
                                            <h4 class="card-title"><i class="fas fa-list-ul"></i> Have experiences </h4>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, animi officiis error debitis est alias inventore fugit in. Perspiciatis, aperiam supis.</p>
                                            {{-- Change route to experiences --}}
                                            <a href="">Search experiences <i class="fas fa-arrow-right"></i></a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card text-left">
                                          <img class="card-img-top" src="holder.js/100px180/" alt="">
                                          <div class="card-body">
                                            <h4 class="card-title"><i class="fas fa-history"></i> Make memories </h4>
                                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto eos eius corporis eligendi amet ipsam officiis rerum voluptas illo inventore. Consectetur adipisicing elit.</p>
                                            {{-- Change route to reviews --}}
                                            <a href="">See reviews <i class="fas fa-arrow-right"></i></a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        {{-- /Site main --}}
    </body>
</html>
