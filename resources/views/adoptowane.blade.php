<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Adoptowane psy</title>
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
        <h3>One już mają dom :)</h3>
        <p>Dzięki waszej pomocy przy wirtualnej adopcji znaleźli się ludzie, którzy postanowili dać im prawdziwy dom.</p>
        <p>Dziękujemy wam za to i mamy nadzieję, że takich przypadków będzie coraz więcej &lt;3</p>
        <div class="gallery">
            <div class="item">
                <a href="psy/alistar.html">
                    <img src="zdjecia/Alistar/alistar1.jpg" alt="">
                    <div class="caption">Alistar</div>
                </a>
            </div>
            <div class="item">
                <a href="psy/ariko.html">
                    <img src="zdjecia/Ariko/ariko1.jpg" alt="">
                    <div class="caption">Ariko</div>
                </a>
            </div>
            <div class="item">
                <a href="psy/gohan.html">
                    <img src="zdjecia/Gohan/gohan1.jpg" alt="">
                    <div class="caption">Gohan</div>
                </a>
            </div>
            <div class="item">
                <a href="psy/shine.html">
                    <img src="zdjecia/Shine/shine1.jpg" alt="">
                    <div class="caption">Shine</div>
                </a>
            </div>
            <div class="item">
                <a href="psy/tasil.html">
                    <img src="zdjecia/Tasil/tasil1.jpg" alt="">
                    <div class="caption">Tasil</div>
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