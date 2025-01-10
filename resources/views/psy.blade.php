<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Psy do adopcji</title>
    <link rel="stylesheet" href="CSS/style1.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
    <div class="pasek">
        <div class="logo">
            <img src="zdjecia/logo.png" alt="">
        </div>
        <div class="separator">
            <span class="separator-text">Wirtualna<br>adopcja</span>
        </div>
        <nav>
            <ul id="nav">
                <li><a href="{{ url('/') }}">Strona główna</a></li>
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
            <div class="item">
                <a href="psy/lonely.html">
                    <img src="zdjecia/Lonely/lonely1.jpg" alt="">
                    <div class="caption">Lonely</div>
                </a>
            </div>
            <div class="item">
                <a href="psy/lento.html">
                    <img src="zdjecia/Lento/lento1.jpg" alt="">
                    <div class="caption">Lento</div>
                </a>
            </div>
            <div class="item">
                <a href="psy/carlo.html">
                    <img src="zdjecia/Carlo/carlo1.jpg" alt="">
                    <div class="caption">Carlo</div>
                </a>
            </div>
            <div class="item">
                <a href="psy/cheddar.html">
                    <img src="zdjecia/Cheddar/cheddar1.jpg" alt="">
                    <div class="caption">Cheddar</div>
                </a>
            </div>
            <div class="item">
                <a href="psy/eika.html">
                    <img src="zdjecia/Eika/eika1.jpg" alt="">
                    <div class="caption">Eika</div>
                </a>
            </div>
            <div class="item">
                <a href="psy/varian.html">
                    <img src="zdjecia/Varian/varian1.jpg" alt="">
                    <div class="caption">Varian</div>
                </a>
            </div>
            <div class="item">
                <a href="psy/luni.html">
                    <img src="zdjecia/Luni/luni1.jpg" alt="">
                    <div class="caption">Luni</div>
                </a>
            </div>
            <div class="item">
                <a href="psy/argon.html">
                    <img src="zdjecia/Argon/argon1.jpg" alt="">
                    <div class="caption">Argon</div>
                </a>
            </div>
            <div class="item">
                <a href="psy/sonar.html">
                    <img src="zdjecia/Sonar/sonar1.jpg" alt="">
                    <div class="caption">Sonar</div>
                </a>
            </div>
        </div>
    </div>

</main>

<footer class="footer">
    <div class="footer-item"><img src="zdjecia/paw.png" alt=""><strong>Wirtualna adopcja</strong></div><br>
    <div class="footer-item"><img src="zdjecia/dom.png" alt="">Nowodwór, 21-100 Lubartów</div><br>
    <div class="footer-item"><img src="zdjecia/telefon.png" alt=""> 535 987 990</div><br>
    <div class="footer-item"><img src="zdjecia/email.png" alt=""> <a href="mailto:aga.marzeda@o2.pl">aga.marzeda@o2.pl</a></div><br>
    <div class="footer-item"><img src="zdjecia/money.png" alt=""> PL 12 3456 7890 1234 5678 9012 3456</div>
    <div class="stopka">&copy;AM</div>
</footer>

</body>
</html>