<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <link rel="stylesheet" href="CSS/style2.css" type="text/css">
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
        <div class="kontakt">
            <h3>Kontakt</h3>
            <h2>Zadzwoń lub napisz</h2>
            <p>+48 535 987 990</p>
            <p>aga.marzeda@o2.pl</p>
            <h2>Kontakt w sprawie adopcji</h2>
            <p>pon.-sob. - godz. 8:00-18:00</p>
            <p>niedz. - godz. 10:00-16:00</p>
            <h2>Numer konta bankowego</h2>
            <p>PL 12 3456 7890 1234 5678 9012 3456</p>
            <h2>Gdzie nas znaleźć?</h2>
            <p>Nowodwór, 21-100 Lubartów</p>
            <div class="map">
                <img src="zdjecia/mapa.png" alt="">
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