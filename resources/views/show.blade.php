@extends('layouts.apps')

@section('title', 'Psy do adopcji')

@section('styles')
<link rel="stylesheet" href="{{ asset('CSS/style2.css') }}" type="text/css">
@endsection

@section('content')
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
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="modalImage">
            <div id="caption"></div>
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <a class="next" onclick="changeSlide(1)">&#10095;</a>
        </div>

    </div>

    @if ($dog->adopted == 0)
    <div class="przyciski">
        <button id="openModalBtn" class="button">Adoptuj</button>
        <div id="myModal1" class="modal1">
            <img src="../zdjecia/piesformularz.png">
            <div class="modal-content1">
                <span class="close1">&times;</span>
                <form id="myForm">
                    <div class="form-group">
                        <label for="fname">Imię:</label>
                        <input type="text" id="fname" name="firstname" placeholder="Twoje imię">
                        <span class="error" id="fnameError"></span>
                    </div>
                    <div class="form-group">
                        <label for="lname">Nazwisko:</label>
                        <input type="text" id="lname" name="lastname" placeholder="Twoje nazwisko">
                        <span class="error" id="lnameError"></span>
                    </div>
                    <div class="form-group">
                        <label for="dogName">Imię psa:</label>
                        <input type="text" id="dogName" name="dogname" placeholder="Imię psa" readonly="readonly" value="{{ $dog->name }}">
                        <span class="error" id="dogNameError"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="text" id="email" name="email" placeholder="E-mail">
                        <span class="error" id="emailError"></span>
                    </div>
                    <div class="form-group">
                        <label for="telefon">Telefon:</label>
                        <input type="text" id="telefon" name="telefon" placeholder="Telefon">
                        <span class="error" id="telefonError"></span>
                    </div>
                    <div class="form-group">
                        <label for="haslo">Hasło:</label>
                        <input type="password" id="haslo" name="haslo" placeholder="Hasło">
                        <span class="error" id="hasloError"></span>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="regulamin" class="regulamin" name="regulamin">
                        <label for="regulamin">Jestem świadomy/a, że wirtualna adopcja tego psa zobowiązuje mnie do regularnego wsparcia finansowego, które zostanie przeznaczone na karmę, leczenie, szczepienia oraz inne niezbędne potrzeby zwierzaka.</label>
                        <span class="error" id="regulaminError"></span>
                    </div>
                    <input type="submit" value="Wyślij">
                    <input type="reset" id="clearButton" value="Wyczyść">
                </form>
            </div>
        </div>
    </div>
    @endif

</div>

<script src="{{ asset('JS/script.js') }}"></script>
<script src="{{ asset('JS/script2.js') }}"></script>

@endsection
