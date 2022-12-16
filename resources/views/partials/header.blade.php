<header id="site-header" class="container">


    <nav class=" navbar p-0">
        <!-- Navbar content -->
        <div class="logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </div>
        <div class="info-navbar">
            <a href="{{route('characters')}}" class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}} ">CHARACTERS</a>
            <a href="{{route('comics')}}" class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}} ">COMICS</a>
            <a href="{{route('movies')}}" class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}} ">MOVIES</a>
            <a href="{{route('characters')}}" class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}} ">TV</a>
            <a href="{{route('characters')}}" class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}} ">GAMES</a>
            <a href="{{route('characters')}}" class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}} ">COLLECTIBLES</a>
            <a href="{{route('characters')}}" class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}} ">VIDEOS</a>
            <a href="{{route('characters')}}" class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}} ">FANS</a>
            <a href="{{route('characters')}}" class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}} ">NEWS</a>
            <a class="m-0" href="{{route('characters')}}" class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}} ">SHOP</a>
        </div>

    </nav>

</header>