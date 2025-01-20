<header>
    <div class="pasek">
        <div class="logo">
            <img src="{{ asset('zdjecia/logo.png') }}" alt="">
        </div>
        <div class="separator">
            <span class="separator-text">Wirtualna<br>adopcja</span>
        </div>
        <nav>
            <ul id="nav">
                <li><a href="{{ url('/home') }}">Strona główna</a></li>
                <li><a href="{{ url('/psy') }}">Psy do adopcji</a></li>
                <li><a href="{{ url('/adoptowane') }}">Adoptowane psy</a></li>
                <li><a href="#">Informacje</a>
                    <ul id="dropdown-menu">
                        <li><a href="{{ url('/onas') }}">O nas</a></li>
                        <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
                    </ul>
                </li>
                @if (Auth::check())
                <li><a href="{{ url('/moje') }}">Moje adopcje</a></li>
                <li><a href="{{url('/mojekonto')}}">Moje konto</a></li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="logout-btn">Wyloguj</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Zaloguj</a></li>
                    <li><a href="{{ route('register') }}">Zarejestruj</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>
