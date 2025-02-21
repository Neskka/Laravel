@extends('layouts.apps')

@section('title', 'Moje adopcje')

@section('styles')
<link rel="stylesheet" href="{{ asset('CSS/style5.css') }}" type="text/css">
@endsection

@section('content')
<div class="zdjecia">
    <h3>Twoje adoptowane psy</h3>
    <div class="gallery">
        @forelse ($dogs as $dog)
        <div class="item">
            <div class="item1">
            <a href="{{ route('adoptowane.show', ['slug' => $dog->slug]) }}">
                <img src="{{ asset('storage/' . $dog->photo_path) }}" alt="{{ $dog->name }}">
                <div class="caption">{{ $dog->name }}</div>
            </a></div>
            <form action="{{ route('adoptowane.cancel', $dog->id) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz zrezygnować z adopcji tego psa?');">
                @csrf
                @method('PATCH')
                <button type="submit" class="button_small">Zrezygnuj z adopcji</button>
            </form>
         </div>
        
        @empty
            <p>Nie masz jeszcze adoptowanych psów. <a href="{{ url('/psy') }}">Adoptuj jakiegoś!</a></p>
        @endforelse
    </div>
</div>
@endsection
