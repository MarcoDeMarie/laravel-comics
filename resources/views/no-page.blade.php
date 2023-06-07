<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
        <div class="logo">
            <img src="/img/dc-logo.png" alt="logo dc">
        </div>
        <nav>
            <ul>
            <li>
                <a href="{{ route('characters') }}">CHARACTERS</a>
                <a href="{{ route('comics') }}">COMICS</a>
                <a href="{{ route('movies') }}">MOVIES</a>
                <a href="{{ route('series') }}">TV SERIES</a>
                <a href="{{ route('games') }}">GAMES</a>
                <a href="{{ route('collectibles') }}">COLLECTIBLES</a>
                <a href="{{ route('videos') }}">VIDEOS</a>
                <a href="{{ route('fans') }}">FANS</a>
                <a href="{{ route('news') }}">NEWS</a>
                <a href="{{ route('shop') }}">SHOP</a>
            </li>
            </ul>
        </nav>
        </div>

    </header>
</body>
</html>
