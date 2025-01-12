@extends('layouts.apps')

@section('title', 'Psy do adopcji')

@section('styles')
<link rel="stylesheet" href="{{ asset('CSS/style3.css') }}" type="text/css">
@endsection

@section('content')
<div class="test">
    <div id="myAdoptionsModal" class="modal">
        <div class="modal-content">
            <h2>Podaj dane</h2>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email">
                <span class="error" id="emailError"></span>
            </div>
            <div class="form-group">
                <label for="password">Hasło:</label>
                <input type="password" id="password" name="password">
                <span class="error" id="passwordError"></span>
            </div>
            <button id="submitBtn">Zaloguj się</button>
        </div>
    </div>

    <div id="adoptionsInfo" class="adoptioninfo"></div>
</div>
<script src="JS/script4.js"></script>
@endsection