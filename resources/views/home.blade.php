<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' integrity='sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==' crossorigin='anonymous'/>
    <title>DC Comics | </title>
</head>

<body>

    {{-- HEADER --}}
    <header>
        <div id="top-header">
            <div class="container">
                <span>DC POWER VISA</span>
                <span>ADDITIONAL DC SITES</span>
            </div>
        </div>
        <section class="container">
            {{-- Logo --}}
            <figure id="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/dc-logo.png') }}" alt="DC Comics" class="img-fluid">
                </a>
            </figure>
        {{-- Nav --}}
        <nav id="nav">
            <ul>
                <li><a href="{{ route('characters') }}">Characters</a></li>
                <li><a href="{{ route('comics') }}">Comics</a></li>
                <li><a href="{{ route('movies') }}">Movies</a></li>
                <li><a href="{{ route('tv') }}">TV</a></li>
                <li><a href="{{ route('games') }}">Games</a></li>
                <li><a href="{{ route('collectibles') }}">Collectibles</a></li>
                <li><a href="{{ route('videos') }}">Videos</a></li>
                <li><a href="{{ route('fans') }}">Fans</a></li>
                <li><a href="{{ route('news') }}">News</a></li>
                <li><a href="{{ route('shop') }}">Shop</a></li>
            </ul>
        </nav>
        {{-- Search --}}
        <div id="search">
            <input type="search" placeholder="Search" aria-label="Search"
              aria-describedby="search-addon" />
              <i class="fas fa-search"></i>
          </div>
    </section>
    </header>
    {{-- MAIN --}}
    <main>
        <section id="products">
            
        </section>
    </main>
    {{-- FOOTER --}}
    <footer>
        {{-- Top footer --}}
        <section id="top-footer">
            <div class="container">
                <div>
                    <h4>DC COMICS</h4>
                    <ul>
                        <li><a href="#">a</a></li>
                        <li><a href="#">s</a></li>
                        <li><a href="#">d</a></li>
                        <li><a href="#">a</a></li>
                        <li><a href="#">sd</a></li>
                        <li><a href="#">d</a></li>
                        <li><a href="#">asd</a></li>
                    </ul>
                    <h4>SHOP</h4>
                    <ul>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                    </ul>
                </div>
                <div>
                    <h4>DC</h4>
                    <ul>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                    </ul>
                </div>
                <div>
                    <h4>SITES</h4>
                    <ul>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                    </ul>
                </div>
            </div>
        </section>
        {{-- Bottom footer --}}
        <section id="bottom-footer">
            <div class="container">
                <span>
                    <button type="button">SIGN-UP NOW!</button>
                </span>
                <span>
                    <ul>
                        <li><a href="#">FOLLOW US</a></li>
                        <li><a href="#">facebook</a></li>
                        <li><a href="#">twitter</a></li>
                        <li><a href="#">youtube</a></li>
                        <li><a href="#">pinterest</a></li>
                        <li><a href="#">geolocal</a></li>
                    </ul>
                </span>
        </div>
        </section>
    </footer>
</body>

</html>