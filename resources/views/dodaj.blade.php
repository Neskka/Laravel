@extends('layouts.apps')

@section('title', 'Dodaj psa')

@section('styles')
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('CSS/style2.css') }}" type="text/css">
@endsection

@section('content')
<div class="container">
    <div class="test">
    <div class="tresc">
        <h3>Dodaj nowego psa</h3>

        <form action="{{ route('dogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table><tr>
                <tr>
                    <td><label for="name">Imię psa</label></td>
                    <td><input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required></td>
                </tr>
                    <td><label for="sex">Płeć</label></td>
                    <td><select name="sex" id="sex" class="form-control" required>
                        <option value="piesek" {{ old('sex') == 'piesek' ? 'selected' : '' }}>Piesek</option>
                        <option value="suczka" {{ old('sex') == 'suczka' ? 'selected' : '' }}>Suczka</option>
                    </select></td>
                </tr>
                    <td><label for="age">Wiek</label></td>
                    <td><input type="number" name="age" id="age" class="form-control" value="{{ old('age') }}" required></td>
                </tr>
                    <td><label for="size">Wielkość</label></td>
                    <td><select name="size" id="size" class="form-control" required>
                        <option value="mały" {{ old('size') == 'mały' ? 'selected' : '' }}>Mały</option>
                        <option value="średni" {{ old('size') == 'średni' ? 'selected' : '' }}>Średni</option>
                        <option value="duży" {{ old('size') == 'duży' ? 'selected' : '' }}>Duży</option>
                    </select></td>
                </tr>
                    <td><label for="weight">Waga</label></td>
                    <td><input type="number" name="weight" id="weight" class="form-control" value="{{ old('weight') }}" required></td>
                </tr>
                    <td><label for="height">Wysokość</label></td>
                    <td><input type="number" name="height" id="height" class="form-control" value="{{ old('height') }}" required></td>
                </tr>
                    <td><label for="hair">Rodzaj sierści</label></td>
                    <td><input type="text" name="hair" id="hair" class="form-control" value="{{ old('hair') }}" required></td>
                </tr>
                    <td><label for="description">Opis</label></td>
                    <td><textarea name="description" id="description" class="form-control" rows="4">{{ old('description') }}</textarea></td>
                </tr>
                    <td><label for="photo">Zdjęcie psa (główne)</label></td>
                    <td><input type="file" name="photo" id="photo" class="form-control"></td>
                </tr>
                    <td><label for="gallery_photos">Galeria zdjęć</label></td>
                    <td><input type="file" name="gallery_photos[]" id="gallery_photos" class="form-control" multiple></br>
                    <small class="form-text text-muted">Możesz dodać do 4 zdjęć do galerii.</small></td>
                </tr>
                    <td><label for="adopted">Adoptowany?</label></td>
                    <td><input type="hidden" name="adopted" value="0">
                        <input type="checkbox" name="adopted" id="adopted" value="1" {{ old('adopted') ? 'checked' : '' }}></td>
                </tr>
                    <td></td><td><button type="submit" class="button_small">Zapisz psa</button></td>
                </tr>
            </tbody></table>
        </form>
    </div>
    </div>
</div>
@endsection
