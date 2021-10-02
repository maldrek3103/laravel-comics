<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics | </title>
</head>

<body>
<header>
    <figure>
        <img src="{{ asset('images/dc-logo.png') }}" alt="">
    </figure>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('characters') }}">Characters</a></li>
        <li><a href="{{ route('comics') }}">Comics</a></li>
        <li><a href="{{ route('movies') }}">Movies</a></li>
        <li><a href="{{ route('tv') }}">TV</a></li>
        <li><a href="{{ route('games') }}">Games</a></li>
        <li><a href="{{ route('collectibles') }}">Collectibles</a></li>
        <li><a href="{{ route('videos') }}">Videos</a></li>
        <li><a href="{{ route('fans') }}">Fans</a></li>
        <li><a href="{{ route('news') }}">News</a></li>
    </ul>
</header>
</body>

</html>