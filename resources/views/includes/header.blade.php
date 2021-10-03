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