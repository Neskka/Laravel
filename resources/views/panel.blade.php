@extends('layouts.apps')

@section('title', 'Zarządzaj psami')

@section('styles')
<link rel="stylesheet" href="{{ asset('CSS/style5.css') }}" type="text/css">
@endsection

@section('content')
<div class="zdjecia">
    <h3>Zarządzaj psami</h3>
    
    <!-- Wyświetlanie komunikatów -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

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
                </a>
            </div>
            <div class="przyciski">
                <button class="button_small"><a href="{{ route('panel.edytuj', ['id' => $dog->id]) }}">Edytuj</a></button>
                <!-- Formularz do usuwania psa -->
                <form action="{{ route('panel.usun', ['id' => $dog->id]) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć tego psa?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button_small">Usuń</button>
                </form>
            </div>
        </div>
        @empty
            <p>Brak psów. <a href="{{ url('/dodaj') }}">Dodaj jakiegoś!</a></p>
        @endforelse
    </div>
</div>
@endsection
