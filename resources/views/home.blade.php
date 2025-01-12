@extends('layouts.apps')

@section('title', 'Psy do adopcji')

@section('styles')
<link rel="stylesheet" href="{{ asset('CSS/styl.css') }}" type="text/css">
@endsection

@section('content')

<section class="image" style="background-image: url('zdjecia/dog3.jpg');"></section>

<section class="text">
    <div class="container">
    <table>
        <tbody>
        <tr>
            <td>Witaj w naszym schronisku dla zwierząt! Jesteśmy miejscem, gdzie troszczymy się o bezdomne zwierzęta, zapewniając im tymczasowy dom oraz miłość i opiekę, których potrzebują. Nasza misja polega na znalezieniu każdemu podopiecznemu kochającego i odpowiedzialnego domu, gdzie będą mogły cieszyć się życiem pełnym miłości i uwagi. Dzięki za wsparcie naszej działalności i za rozważenie adopcji zwierzaka z naszego schroniska!</td>
            <td rowspan="3"><img src="{{ asset('zdjecia/paws.png') }}" class="flex-image" alt=""></td>
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
                @foreach ($dogs as $dog)
                    <div class="slide">
                        <a href="{{ url('psy/' . $dog->slug) }}">
                            <img src="{{ asset('zdjecia/' . ucfirst($dog->name) . '/' . strtolower($dog->name) . '1.jpg') }}" alt="{{ $dog->name }}">
                            <div class="caption">{{ $dog->name }}</div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button onclick="plusSlides(1)" class="next">&#10095;</button>
        </div>
    </div>
    
</section>

<section class="image" style="background-image: url('zdjecia/dog3.png');"></section>

<script src="JS/script1.js"></script>
@endsection