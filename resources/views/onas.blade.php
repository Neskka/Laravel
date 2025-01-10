<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>O nas</title>
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
    <div class="test">
    <div class="opis">
        <h3>O nas</h3>
        <p>Naszą misją jest nie tylko zapewnienie domów naszym podopiecznym, ale także edukowanie społeczeństwa na temat odpowiedzialnej opieki nad zwierzętami. Jednym z naszych najnowszych i najbardziej ekscytujących projektów jest program wirtualnej adopcji, który daje możliwość pomocy naszym zwierzakom na odległość.</p>
        <p>Dzięki wirtualnej adopcji, każdy może stać się opiekunem jednego z naszych podopiecznych, nie wychodząc z domu. Program ten jest idealnym rozwiązaniem dla tych, którzy nie mogą fizycznie adoptować zwierzaka, ale pragną wnieść swój wkład w ich dobrobyt. Adopcja wirtualna polega na regularnym wsparciu finansowym, które przeznaczamy na karmę, leczenie, szczepienia oraz inne niezbędne potrzeby zwierzaka.</p>
        <p>Nasi wirtualni opiekunowie otrzymują regularne aktualizacje o stanie zdrowia i samopoczuciu swojego podopiecznego. Dzięki temu mogą śledzić jego rozwój, a także cieszyć się jego postępami. Co więcej, każdy wirtualny opiekun może odwiedzić swojego zwierzaka w schronisku i spędzić z nim czas, co jest niezapomnianym doświadczeniem zarówno dla zwierzaka, jak i dla opiekuna.</p>
        <p>Schronisko, które prowadzimy, jest miejscem, gdzie zwierzęta otrzymują drugą szansę na szczęśliwe życie. Każdy zwierzak, który trafia do nas, ma swoją unikalną historię, często pełną trudnych doświadczeń. Naszym celem jest, aby te historie miały szczęśliwe zakończenie. Dzięki wsparciu wirtualnych opiekunów możemy zapewnić naszym podopiecznym najlepszą możliwą opiekę, a także pracować nad ich resocjalizacją i przygotowaniem do adopcji stałej.</p>
        <p>Wierzymy, że każdy zwierzak zasługuje na dom pełen miłości i bezpieczeństwa. Nasz program wirtualnej adopcji daje nam możliwość zbliżenia się do tego celu, jednocześnie angażując społeczność w działania na rzecz zwierząt. Każde wsparcie, niezależnie od jego formy, jest dla nas niezwykle cenne i pozwala na kontynuowanie naszej misji.</p>
        <p>Zapraszamy wszystkich do dołączenia do naszego programu wirtualnej adopcji. Razem możemy uczynić świat lepszym miejscem dla zwierząt, które potrzebują naszej pomocy. Dzięki Waszej pomocy, nasi podopieczni mogą liczyć na lepsze życie, pełne miłości i troski, na które bez wątpienia zasługują.</p>
        <img src="zdjecia/background.jpg" alt="">
        <button id="fetchButton">Pokaż słodkiego pieska</button>
        <div id="dataContainer"></div>
    </div>
    </div>
</main>
<script src="JS/script5.js"></script>
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