<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Psy do adopcji</title>
    <link rel="stylesheet" href="{{ asset('CSS/style1.css') }}" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
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
                        <li><a href="{{ url('/onas') }}" >O nas</a></li>
                        <li><a href="{{ url('/kontakt') }}" >Kontakt</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/moje') }}">Moje adopcje</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div class="zdjecia">
        <h3>Pomóż im znaleźć dom :(</h3>
        <div class="gallery">
            @forelse ($dogs as $dog)
                <div class="item">
                    <a href="{{ route('psy.show', ['slug' => $dog->slug]) }}">
                        <img src="{{ asset('storage/' . $dog->photo_path) }}" alt="{{ $dog->name }}">
                        <div class="caption">{{ $dog->name }}</div>
                    </a>
                </div>
            @empty
                <p>Brak psów do wyświetlenia.</p>
            @endforelse
        </div>
    </div>
</main>


<footer class="footer">
    <div class="footer-item"><img src="{{ asset('zdjecia/paw.png') }}" alt=""><strong>Wirtualna adopcja</strong></div><br>
    <div class="footer-item"><img src="{{ asset('zdjecia/dom.png') }}" alt="">Nowodwór, 21-100 Lubartów</div><br>
    <div class="footer-item"><img src="{{ asset('zdjecia/telefon.png') }}" alt=""> 535 987 990</div><br>
    <div class="footer-item"><img src="{{ asset('zdjecia/email.png') }}" alt=""> <a href="mailto:aga.marzeda@o2.pl">aga.marzeda@o2.pl</a></div><br>
    <div class="footer-item"><img src="{{ asset('zdjecia/money.png') }}" alt=""> PL 12 3456 7890 1234 5678 9012 3456</div>
    <div class="stopka">&copy;AM</div>
</footer>

</body>
</html>
