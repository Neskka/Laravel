@extends('layouts.apps')

@section('title', 'Psy do adopcji')

@section('styles')
<link rel="stylesheet" href="{{ asset('CSS/style1.css') }}" type="text/css">
@endsection

@section('content')
<div class="zdjecia">
    <h3>Pomóż im znaleźć dom :(</h3>
    <div class="gallery">
        @forelse ($dogs as $dog)
        <div class="item">
            <a href="{{ route('psy.show', ['slug' => $dog->slug]) }}">
                <img src="{{ asset('storage/' . $dog->photo_path) }}" alt="{{ $dog->name }}">
                <div class="caption">{{ $dog->name }}</div>
            </a>
            @if ($dog->adopted)
                <span>Adoptowany</span>
            @endif
        </div>
        @empty
            <p>Brak psów do wyświetlenia.</p>
        @endforelse
    </div>
</div>
@endsection
