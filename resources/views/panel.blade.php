@extends('layouts.apps')

@section('title', 'Zarządzaj psami')

@section('styles')
<link rel="stylesheet" href="{{ asset('CSS/style5.css') }}" type="text/css">
@endsection

@section('content')
<div class="zdjecia">
    <h3>Zarządzaj psami</h3>
    <div class="przycisk">
        <button class="button_small"><a href="{{ route('dodaj') }}">Dodaj nowego psa</a></button>
    </div>
    <div class="gallery">
        @forelse ($dogs as $dog)
        <div class="item">
            <div class="item1">
            <a href="{{ route('adoptowane.show', ['slug' => $dog->slug]) }}">
                <img src="{{ asset('storage/' . $dog->photo_path) }}" alt="{{ $dog->name }}">
                <div class="caption">{{ $dog->name }}</div>
            </a></div>
            <div class="przyciski">
                <button type="submit" class="button_small">Edytuj</button>
                <button type="submit" class="button_small">Usuń</button>
            </div>
         </div>
        
        @empty
            <p>Brak psów. <a href="{{ url('/dodaj') }}">Dodaj jakiegoś!</a></p>
        @endforelse
    </div>
</div>
@endsection
