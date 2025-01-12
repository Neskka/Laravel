@extends('layouts.apps')

@section('title', 'Adoptowane psy')

@section('styles')
<link rel="stylesheet" href="{{ asset('CSS/style1.css') }}" type="text/css">
@endsection

@section('content')
<div class="zdjecia">
    <h3>One już mają dom :)</h3>
    <p>Dzięki waszej pomocy przy wirtualnej adopcji znaleźli się ludzie, którzy postanowili dać im prawdziwy dom.</p>
    <p>Dziękujemy wam za to i mamy nadzieję, że takich przypadków będzie coraz więcej &lt;3</p>
    <div class="gallery">
        @forelse ($dogs as $dog)
            <div class="item">
                <a href="{{ route('adoptowane.show', ['slug' => $dog->slug]) }}">
                    <img src="{{ asset('storage/' . $dog->photo_path) }}" alt="{{ $dog->name }}">
                    <div class="caption">{{ $dog->name }}</div>
                </a>
            </div>
        @empty
            <p>Brak psów do wyświetlenia.</p>
        @endforelse
    </div>
</div>
@endsection