<header>
    <div class="container-fluid">
        <div class="logo">
            <a href="/"><img src="{{ asset('/img/carlogos/acura-128x128-202936-removebg-preview.png') }}" alt=""></a>
        </div>

        <div class="nav-toggle d-md-none">
            <div class="nav-btn">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>

        <nav>
            <ul>
                {{--                @each('partials.navigation', $pages, 'item')--}}
                <li><a href="{{ route('/login') }}">inloggen</a></li>
                @if(auth()->check())
                    <li><a href="{{ route('/dashboard') }}">Dashboard</a></li>
                <li><span>Welkom terug {{ Auth::user()->name }}</span></li>
                    <li><a href="{{ route('/logout') }}">logout</a></li>
                @else
                    <li><a href="{{ route('/register') }}">Registreren</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>
