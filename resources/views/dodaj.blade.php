@extends('layouts.apps')

@section('styles')
<link rel="stylesheet" href="{{ asset('CSS/styl.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}" type="text/css">
@endsection

@section('content')
<div class="container">
    <h3>Dodaj psa do adopcji</h3>

    <form action="{{ route('dogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Imię psa</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="sex">Płeć</label>
            <select name="sex" id="sex" class="form-control" required>
                <option value="piesek" {{ old('sex') == 'piesek' ? 'selected' : '' }}>Piesek</option>
                <option value="suczka" {{ old('sex') == 'suczka' ? 'selected' : '' }}>Suczka</option>
            </select>
        </div>

        <div class="form-group">
            <label for="age">Wiek</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ old('age') }}" required>
        </div>

        <div class="form-group">
            <label for="size">Wielkość</label>
            <select name="size" id="size" class="form-control" required>
                <option value="mały" {{ old('size') == 'mały' ? 'selected' : '' }}>Mały</option>
                <option value="średni" {{ old('size') == 'średni' ? 'selected' : '' }}>Średni</option>
                <option value="duży" {{ old('size') == 'duży' ? 'selected' : '' }}>Duży</option>
            </select>
        </div>

        <div class="form-group">
            <label for="weight">Waga</label>
            <input type="number" name="weight" id="weight" class="form-control" value="{{ old('weight') }}" required>
        </div>

        <div class="form-group">
            <label for="height">Wysokość</label>
            <input type="number" name="height" id="height" class="form-control" value="{{ old('height') }}" required>
        </div>

        <div class="form-group">
            <label for="hair">Rodzaj sierści</label>
            <input type="text" name="hair" id="hair" class="form-control" value="{{ old('hair') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Opis</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="photo">Zdjęcie psa (główne)</label>
            <input type="file" name="photo" id="photo" class="form-control">
        </div>

        <div class="form-group">
            <label for="gallery_photos">Galeria zdjęć</label>
            <input type="file" name="gallery_photos[]" id="gallery_photos" class="form-control" multiple>
            <small class="form-text text-muted">Możesz dodać do 4 zdjęć do galerii.</small>
        </div>

        <div class="form-group">
            <label for="adopted">Adoptowany?</label>
            <input type="checkbox" name="adopted" id="adopted" {{ old('adopted') ? 'checked' : '' }}>
        </div>

        <button type="submit" class="btn btn-primary">Zapisz psa</button>
    </form>
</div>
@endsection
