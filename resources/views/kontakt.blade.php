@extends('layouts.apps')

@section('title', 'Psy do adopcji')

@section('styles')
<link rel="stylesheet" href="{{ asset('CSS/style2.css') }}" type="text/css">
@endsection

@section('content')
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
@endsection