@extends('layouts.apps')

@section('title', 'Moje konto')

@section('styles')
<link rel="stylesheet" href="{{ asset('CSS/style2.css') }}" type="text/css">
@endsection

@section('content')
<div class="test">
    <div class="tresc">
        <h3>Moje konto</h3>
        <table>
            <tbody>
            <tr>
                <td><strong>Imię</strong></td>
                <td>{{ Auth::user() ? Auth::user()->name : old('firstname') }}</td>
            </tr>
            <tr>
                <td><strong>Nazwisko</strong></td>
                <td>{{ Auth::user() ? Auth::user()->surname : old('surname') }}</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>{{ Auth::user() ? Auth::user()->email : old('email') }}</td>
            </tr>
            <tr>
                <td><strong>Telefon</strong></td>
                <td>{{ Auth::user() ? Auth::user()->phone : old('phone') }}</td>
            </tr>
            </tbody>
        </table>
        <div class="przyciski">
            <button type="button" class="button_small" id="edit-data-btn">Edytuj dane</button>
            <button type="button" class="button_small" id="change-password-btn">Zmień hasło</button>
            <form action="{{ route('destroy') }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć swoje konto? Ta operacja jest nieodwracalna.');">
                @csrf
                @method('DELETE')
                <button type="submit" class="button_small">Usuń konto</button>
            </form>
        </div>

        <!-- Ukryty formularz zmiany hasła -->
        <form id="change-password-form" action="{{ route('password.change') }}" method="POST" style="display: none; margin-top: 20px;">
            @csrf
            <div>
                <label for="current_password">Obecne hasło:</label>
                <input type="password" id="current_password" name="current_password" required>
            </div>
            <div>
                <label for="new_password">Nowe hasło:</label>
                <input type="password" id="new_password" name="new_password" required>
            </div>
            <div>
                <label for="new_password_confirmation">Powtórz nowe hasło:</label>
                <input type="password" id="new_password_confirmation" name="new_password_confirmation" required>
            </div>
            <button type="submit" class="button_small">Zmień hasło</button>
        </form>
    </div>
</div> 
<script src="{{ asset('JS/script6.js') }}"></script>
@endsection