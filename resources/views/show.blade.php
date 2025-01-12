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

</div>

<script src="{{ asset('JS/script.js') }}"></script>
<!--<script src="{{ asset('JS/script2.js') }}"></script>-->

@endsection
