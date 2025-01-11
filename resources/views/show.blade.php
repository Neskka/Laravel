<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>{{ $dog->name }}</title>
    <link rel="stylesheet" href="{{ asset('CSS/style2.css') }}" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
    <div class="pasek">
        <div class="logo">
            <img src="{{ asset('zdjecia/logo.png') }}" alt="">
        </div>
        <div class="separator">
            <span class="separator-text"><p>Wirtualna</p><p>adopcja</p></span>
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
    <div class="test">
        <div class="tresc">
            <h3 id="dname">{{ $dog->name }}</h3>
            <img src="{{ asset('storage/'.$dog->photo_path) }}" alt="{{ $dog->name }}">
            <table>
                <tbody>
                <tr>
                    <td><strong>Płeć</strong></td>
                    <td>{{ ucfirst($dog->sex) }}</td>
                </tr>
                <tr>
                    <td><strong>Wiek</strong></td>
                    <td>
                        @if ($dog->age == 1)
                            ok. 1 roku
                        @elseif ($dog->age > 1 && $dog->age < 5)
                            ok. {{ $dog->age }} lata
                        @else
                            ok. {{ $dog->age }} lat
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Wielkość</strong></td>
                    <td>{{ ucfirst($dog->size) }}</td>
                </tr>
                <tr>
                    <td><strong>Waga</strong></td>
                    <td>ok. {{ $dog->weight }} kg</td>
                </tr>
                <tr>
                    <td><strong>Wysokość w kłębie</strong></td>
                    <td>ok. {{ $dog->height }} cm</td>
                </tr>
                <tr>
                    <td><strong>Sierść</strong></td>
                    <td>{{ $dog->hair }}</td>
                </tr>
                <tr>
                    <td><strong>Status</strong></td>
                    <td>{{ $dog->adopted ? 'Adoptowany' : 'Do adopcji' }}</td>
                </tr>
                </tbody>
            </table>
            <p>{{ $dog->description }}</p>
        </div>
        <div class="zdjecia">
            <div class="gallery">
                @foreach ($dog->photos as $photo)
                    <img src="{{ asset('storage/'.$photo->photo_path) }}" class="thumbnail">
                @endforeach
            </div>
        </div>

    </div>
</main>

<script src="{{ asset('JS/script.js') }}"></script>
<script src="{{ asset('JS/script2.js') }}"></script>

<footer class="footer">
    <p><div class="footer-item"><img src="{{ asset('zdjecia/paw.png') }}"><strong>Wirtualna adopcja</strong></div></p>
    <p><div class="footer-item"><img src="{{ asset('zdjecia/dom.png') }}">Nowodwór, 21-100 Lubartów</div></p>
    <p><div class="footer-item"><img src="{{ asset('zdjecia/telefon.png') }}"> 535 987 990</div></p>
    <p><div class="footer-item"><img src="{{ asset('zdjecia/email.png') }}"> <a href="mailto:aga.marzeda@o2.pl">aga.marzeda@o2.pl</a></div></p>
    <div class="footer-item"><img src="{{ asset('zdjecia/money.png') }}"> PL 12 3456 7890 1234 5678 9012 3456</div>
    <div class="stopka">&copy;AM</div>
</footer>

</body>
</html>
