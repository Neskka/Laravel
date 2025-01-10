<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Moje adopcje</title>
    <link rel="stylesheet" href="CSS/style3.css" type="text/css">
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
    <div id="myAdoptionsModal" class="modal">
        <div class="modal-content">
            <h2>Podaj dane</h2>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email">
                <span class="error" id="emailError"></span>
            </div>
            <div class="form-group">
                <label for="password">Hasło:</label>
                <input type="password" id="password" name="password">
                <span class="error" id="passwordError"></span>
            </div>
            <button id="submitBtn">Zaloguj się</button>
        </div>
    </div>

    <div id="adoptionsInfo" class="adoptioninfo"></div>
    </div>
</main>
<script src="JS/script4.js"></script>
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