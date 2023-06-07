<header>
    <div class="container">
    <div class="logo">
        <img src="/img/dc-logo.png" alt="logo dc">
    </div>
    <nav>
        <ul>
        <li>
            <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('characters') }}">CHARACTERS</a>
            <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('comics') }}">COMICS</a>
            <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('movies') }}">MOVIES</a>
            <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('series') }}">TV SERIES</a>
            <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('games') }}">GAMES</a>
            <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('collectibles') }}">COLLECTIBLES</a>
            <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('videos') }}">VIDEOS</a>
            <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('fans') }}">FANS</a>
            <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('news') }}">NEWS</a>
            <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('shop') }}">SHOP</a>
        </li>
        </ul>
    </nav>
    </div>

</header>
