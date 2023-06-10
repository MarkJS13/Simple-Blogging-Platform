<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/index.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <div>
            <div class="homepage">
                <div class="title">

                    
                    <h1> News Feed <span class="material-symbols-outlined"> feed </span></h1>
                    
                    <div>
                        <span class="light-bulb material-symbols-outlined"> tips_and_updates </span>
                    </div>
                    @if (Route::has('login'))
                    <div class="register">
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                    
                </div>
        
                <ul>
                    @foreach ($posts as $post)
                    <li> {{ $post->title }} <span> {{ $post->created_at }}  </span>   {{ $post->user->name }} </li>
                    
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>
