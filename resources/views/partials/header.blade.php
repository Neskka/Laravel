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
                <li><a href="">Informacje</a>
                    <ul>
                        <li><a href="{{ url('/onas') }}">O nas</a></li>
                        <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/moje') }}">Moje adopcje</a></li>
            </ul>
        </nav>
    </div>
</header>