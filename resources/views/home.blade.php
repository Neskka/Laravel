<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wirtualna adopcja</title>
    <link rel="stylesheet" href="CSS/styl.css" type="text/css">
    <style>

    </style>
</head>
<body>
<header id="header">
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

    <section class="image" style="background-image: url('zdjecia/dog3.jpg');"></section>


<section class="text">
    <div class="container">
    <table>
        <tbody>
        <tr>
            <td>Witaj w naszym schronisku dla zwierząt! Jesteśmy miejscem, gdzie troszczymy się o bezdomne zwierzęta, zapewniając im tymczasowy dom oraz miłość i opiekę, których potrzebują. Nasza misja polega na znalezieniu każdemu podopiecznemu kochającego i odpowiedzialnego domu, gdzie będą mogły cieszyć się życiem pełnym miłości i uwagi. Dzięki za wsparcie naszej działalności i za rozważenie adopcji zwierzaka z naszego schroniska!</td>
            <td rowspan="3"><img src="zdjecia/paws.png" class="flex-image" alt=""></td>
        </tr>
        <tr>
            <td><h2>Wirtualna adopcja</h2></td>
        </tr>
        <tr>
            <td>Wirtualna adopcja to wyjątkowa inicjatywa, dzięki której możecie na odległość zaopiekować się jednym z naszych zwierzaków. Wybierając wirtualną adopcję, pomagacie nam finansowo, co umożliwia pokrycie kosztów jedzenia, opieki medycznej i innych potrzebnych zasobów dla wybranego zwierzaka. To świetne rozwiązanie dla tych, którzy nie mogą przyjąć zwierzęcia do swojego domu, ale pragną wesprzeć jego opiekę i rozwój. Każdy z wirtualnych opiekunów otrzymuje regularne aktualizacje o swoim podopiecznym, w tym zdjęcia, filmy oraz informacje o jego stanie zdrowia i postępach. Dzięki temu możecie na bieżąco śledzić, jak Wasze wsparcie pomaga w poprawie życia naszego zwierzaka.</td>
        </tr>
        </tbody>
    </table>
    </div>
        <div class="zdjecia">
            <h3>Nasze psy</h3>
            <div class="gallery">
                <button onclick="plusSlides(-1)" class="prev">&#10094;</button>
                <div class="slides">
                    <div class="slide">
                        <a href="psy/lonely.html">
                            <img src="zdjecia/Lonely/lonely1.jpg" alt="">
                            <div class="caption">Lonely</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="psy/lento.html">
                            <img src="zdjecia/Lento/lento1.jpg" alt="">
                            <div class="caption">Lento</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="psy/carlo.html">
                            <img src="zdjecia/Carlo/carlo1.jpg" alt="">
                            <div class="caption">Carlo</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="psy/cheddar.html">
                            <img src="zdjecia/Cheddar/cheddar1.jpg" alt="">
                            <div class="caption">Cheddar</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="psy/eika.html">
                            <img src="zdjecia/Eika/eika1.jpg" alt="">
                            <div class="caption">Eika</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="psy/varian.html">
                            <img src="zdjecia/Varian/varian1.jpg" alt="">
                            <div class="caption">Varian</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="psy/luni.html">
                            <img src="zdjecia/Luni/luni1.jpg" alt="">
                            <div class="caption">Luni</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="psy/argon.html">
                            <img src="zdjecia/Argon/argon1.jpg" alt="">
                            <div class="caption">Argon</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="psy/sonar.html">
                            <img src="zdjecia/Sonar/sonar1.jpg" alt="">
                            <div class="caption">Sonar</div>
                        </a>
                    </div>
                </div>
                <button onclick="plusSlides(1)" class="next">&#10095;</button>
            </div>
        </div>
</section>

    <section class="image" style="background-image: url('zdjecia/dog3.png');"></section>

<script src="JS/script1.js"></script>
<footer class="footer">
    <div class="footer-item"><img src="zdjecia/paw.png" alt=""><strong>Wirtualna adopcja</strong></div><br>
    <div class="footer-item"><img src="zdjecia/dom.png" alt="">Nowodwór, 21-100 Lubartów</div><br>
    <div class="footer-item"><img src="zdjecia/telefon.png" alt=""> 535 987 990</div><br>
    <div class="footer-item"><img src="zdjecia/email.png" alt=""> <a href="mailto:aga.marzeda@o2.pl">aga.marzeda@o2.pl</a></div>
    <div class="stopka">&copy;AM</div>
</footer>
</body>
</html>